# Laravel Request Lifecycle

## Introduction

Understanding how Laravel internally processes a request builds confidence and makes development feel less "magical." 

## Lifecycle Overview

### First Steps

All requests to a Laravel application start at `public/index.php`, which:
- Loads the Composer autoloader
- Retrieves the Laravel application instance from `bootstrap/app.php`
- Creates the service container (application instance)

### HTTP / Console Kernels

After initializing the application:
- The request is passed to either the **HTTP kernel** or the **console kernel**.
- Focus is mainly on the HTTP kernel (`Illuminate\Foundation\Http\Kernel`), which:
  - Runs bootstrappers (e.g., environment detection, error handling)
  - Passes the request through a middleware stack (e.g., sessions, CSRF protection)
  - Receives a `Request` and returns a `Response`

### Service Providers

A critical step is **registering service providers**, which:
- Bootstrap and configure all Laravel components (database, queue, validation, routing)
- Follow this lifecycle:
  - `register` methods are called first to bind services
  - After all providers are registered, `boot` methods are called
  
Custom service providers can be created to organize application-specific services. User-defined providers are typically found in the `app/Providers` directory.

### Routing

Once the application is bootstrapped:
- The request is dispatched to a route or controller via the **router**.
- Middleware assigned to routes filters or validates requests (e.g., authentication checks).
- The route/controller returns a response, which is passed back through middleware.

### Finishing Up

- After middleware processing, the HTTP kernel returns the `Response` object.
- The response is sent to the user's web browser.
- The full request lifecycle is now complete.

## Focus on Service Providers

Service providers are at the **core of the Laravel bootstrapping process**:
- Application creation → Service providers registered → Request handled.
- Managing and understanding service providers (e.g., `AppServiceProvider`) is key for organizing large Laravel applications efficiently.

## Summary

- Request enters through `index.php`
- Application and service container are initialized
- Kernels and middleware process the request
- Service providers configure all major features
- Request routed and handled
- Response sent back to the client

# Laravel Routing (v12.x)

## Basic Routing
```
Route::get('/welcome', fn () => 'Hello World');
```
- Supports all HTTP verbs (`get`, `post`, `put`, `delete`, etc.)
- Closure or controller handling

## Route Parameters
```
Route::get('/user/{id}', fn ($id) => "User $id");
```
- Required (`{param}`) and optional (`{param?}`) parameters
- Constraints via `where()` (regex validation)

## Named Routes
```
Route::get('/dashboard', ...)->name('dashboard');
// Generate URL: `route('dashboard')`
```

## Middleware
```
Route::get('/admin', ...)->middleware('auth');
```

## Route Groups
```
Route::prefix('api')->group(function () {
    Route::get('/users', ...);
});
```
- Shared attributes: `prefix`, `middleware`, `namespace`

## Controllers
```
Route::get('/posts', [PostController::class, 'index']);
```

## Resource Routes
```
Route::resource('photos', PhotoController::class);
```
- Auto-generates CRUD routes

## API Routes
```
Route::apiResource('photos', PhotoController::class);
```
- Excludes HTML creation routes

## Advanced Features
- Route model binding
- Rate limiting
- Route caching (`php artisan route:cache`)
- Fallback routes


# Laravel Facades (v11.x)

## What Are Facades?
Facades provide **static-like access** to Laravel's services via proxy classes. They serve as **static interfaces** to classes in the service container.

## Key Characteristics:
- **Static syntax** for non-static services
- **Proxy calls** to underlying container-resolved objects
- **Clean syntax** for common services

## Example Usage:

```
use Illuminate\Support\Facades\Cache;

// Static-like call to cache service
Cache::put('key', 'value', $seconds);
```


## 📌 Common Facades:
- `Cache` - Caching system
- `Route` - Routing system
- `DB` - Database operations
- `Auth` - Authentication
- `Session` - Session handling



## Resources :
-[Laravel - Request Lifecycle](https://laravel.com/docs/12.x/lifecycle)
-[Laravel - Routing](https://laravel.com/docs/12.x/routing)
-[Laravel - Facades](https://laravel.com/docs/11.x/facades)
