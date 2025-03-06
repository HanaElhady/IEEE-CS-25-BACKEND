# PHP Overview  

## What is PHP?  
- **PHP** stands for **"PHP: Hypertext Preprocessor"**  
- It is a **widely-used, open-source** scripting language  
- PHP scripts are executed **on the server**  
- **Free to use and download**  

---

## What Can PHP Do?  
- Generate **dynamic page content**  
- Handle **file operations** (create, open, read, write, delete, close)  
- Collect **form data**  
- Send and receive **cookies**  
- Manage **databases** (add, delete, modify data)  
- Control **user access**  
- Encrypt data  
- Output **HTML, images, PDFs, XHTML, XML**  
---

# PHP Error Types  

Errors in PHP are classified into three main categories:  

### **1. Syntax Errors**  
### **2. Runtime errors**
### **3. Logical errors**

---

# PHP `echo` vs `print`

| Feature       | `echo`             | `print`          |
|--------------|------------------|----------------|
| Arguments    | Accepts multiple | Only one      |
| Return Value | No               | Returns `1`   |
| Speed        | Faster           | Slower        |
| Usage        | Outputs multiple strings | Outputs one string |

**Conclusion:**  
Both `echo` and `print` are useful for displaying output. However, `echo` is **faster** and supports multiple arguments.

---

# PHP and Case Sensitivity: Why Is It Partially Case Sensitive?  

Unlike most programming languages, PHP has **partial case sensitivity**:

## Case Sensitivity in PHP  

### **Case-Sensitive Elements**  
- Variables  
- Constants (both user-defined and PHP-defined)  
- Array keys  
- Class properties  

### **Case-Insensitive Elements**  
- Functions  
- Class constructors and methods  
- Keywords and constructs (`if`, `else`, `foreach`, `null`, `echo`, etc.)  

## Why Is PHP Partially Case-Sensitive?  

PHP’s hybrid approach was designed to:  
- **Ensure backward compatibility** with older scripts and legacy applications.  
- **Improve readability**, allowing function and class names to be flexible with case variations.  
- **Offer flexibility**, giving developers control over case sensitivity where needed.  

This approach balances **legacy support** with **modern development practices**, making PHP more adaptable.  
---
# Programming language vs scripting language
Programming languages were created to make complex software, whereas scripting languages were created to assist programming languages. Programming languages are compiled whereas scripting 
languages are interpreted. We shall have a look at some differences between programming languages and scripting languages in the next section.


| Programming Language	| Scripting Language |
|------------------|----------------|
|Is a type of computer language that consists of a set of instructions for communicating with computers.	| Is a kind of programming language that is used to automate the execution of operations in a runtime environment. |
|Most programming languages are compiled. The translation overhead is incurred just once when the source is compiled; after that, it merely needs to be loaded and run.|	Most scripting languages are interpreted languages. They must be parsed, interpreted, and executed each time the program is run.|
|Based on low-level languages.|	Prefer high-level languages.|
|Execution of a program takes more time since they are compiled.	|Execution of a script takes less time as scripts are generally short.
|It is used to create a new program or piece of software from the scratch.|	It is used to enhance an existing program or automate a specific task. A scripting language is used to control the behavior of a program.|
|Most regular programming languages are stronger in data and control abstraction.|	Scripting languages generally emphasize the extensibility and richness of expressions.|
|Runs or executes independently.|Runs inside a parent program.|
|Generally requires many lines of code to accomplish a particular task.|Usually requires fewer lines than a programming language to accomplish a task.
|Have high maintenance costs.|	Have a low maintenance cost.|
|Generate .exe files.|Do not create .exe files.|
|User interface design and graphic design are often partially supported by programming languages. |	User interface design, data types, and graphic design are all greatly aided by scripting languages.|
|Programming languages are designed to make full-fledged software development easier.|	Scripting languages are used to assist programming languages and make coding easier and faster. They are typically used for open projects and web development.|
|Code takes a long time to develop since more code must be written (in most cases).|Less time to code, as fewer lines (in most cases) of code are to be written.|
|Self-executable.|Require a host.|
|All programming languages are not scripting languages.	|All scripting languages are programming languages.|
|Examples include C, C++, Java, Python, etc.|	Examples include Perl, PHP, JavaScript, etc.|

---
# Dynamically typed vs statically typed language

| Feature                  | Statically-Typed Languages           | Dynamically-Typed Languages        |
|--------------------------|--------------------------------------|------------------------------------|
| **Type Checking**        | Done at compile-time                | Done at run-time                  |
| **Variable Declaration** | Requires explicit type declaration  | No need to declare types          |
| **Flexibility**          | Less flexible, strict type rules    | More flexible, allows type changes |
| **Error Detection**      | Errors detected before execution    | Errors detected at run-time       |
| **Performance**         | Faster at run-time (optimized code) | Slower at run-time (type checking needed) |
| **Development Speed**    | Slower (strict typing needed)       | Faster (no type declarations)     |
| **Examples**            | Java, C, C++, Swift, Rust, Kotlin   | Python, JavaScript, Ruby, PHP     |
| **Best Use Cases**      | Large-scale applications, high performance | Rapid prototyping, scripting, flexibility |
---
# Assign by Value VS Assign by Reference
| Concept                          | Pass-by-Value                             | Pass-by-Reference (Reference Value)  |
|----------------------------------|------------------------------------------|-------------------------------------|
| **Definition**                   | Copies the actual value of the variable | Copies the reference (memory address) of the variable |
| **Modification Effect**           | Changes do not affect the original variable | Changes affect the original variable |
| **Memory Address Sharing**        | Each variable has a unique memory address | Multiple variables can point to the same memory address |
| **Mutability Impact**             | Works well with immutable types         | Can modify mutable objects directly |
| **Error Risk**                    | Safer (prevents unintended modifications) | Risky (accidental changes affect all references) |
| **Performance**                   | Slower for large objects (deep copies required) | Faster (only references are copied) |
| **Common in**                     | Low-level languages (C, Go, Java - primitives) | High-level languages (Python, JavaScript, Ruby - objects) |

### **Behavior in Different Languages**
| Language   | Primitives (Numbers, Strings, etc.) | Objects (Arrays, Dicts, etc.) |
|------------|-------------------------------------|--------------------------------|
| **Go**      | Passed by Value                   | Passed by Value (Uses Pointers for References) |
| **JavaScript** | Passed by Value                 | Passed by Reference Value |
| **Ruby**     | Passed by Reference Value         | Passed by Reference Value |
| **Perl**     | Passed by Reference Value         | Passed by Reference |
| **C / Java** | Passed by Value                   | Passed by Reference (Objects via References) |

### **Key Takeaways**
- **Pass-by-Value** is common in lower-level languages for safety and memory isolation.
- **Pass-by-Reference (Reference Value)** is used in higher-level languages for flexibility and efficiency.
- **Mutable vs Immutable Types**: Even in pass-by-reference languages, immutable types behave like pass-by-value.
- **Mixing Both**: Some languages (JavaScript, Java) mix strategies depending on whether a value is a primitive or an object.
---
# What is the difference between for and foreach loop in PHP?

## The `for` Loop  
The `for` loop is an **iterative loop** that repeats a block of code **until a specific condition is met**. It is useful when the number of iterations is known.

### **Syntax**
```php
for (initialization; condition; increment/decrement) {
    // Code to execute
}
```
-  Doesn't hide the iteration.
-  More complex than foreach.
-  Slower than foreach.

## The `foreach ` Loop  
The `foreach ` loop is specifically designed to iterate over arrays in PHP.


### **Syntax**
```php
foreach ($array as $element) {
    // Code to execute
}

foreach ($array as $key => $element) {
    // Code to execute
}
```
-  Hides iteration for better readability.
-  Simpler than for loops.
-  Faster execution than for loops.
---
# Sessions vs Cookies

| Basis of Comparison | Cookie | Session |
| ------------------- |--------|---------|
| Definition | client-side files that are stored on a local computer and contain user information | Server-side files that store user information |
| Expiry | Expire after the user specified lifetime | The session ends when the user closes the browser or logs out of the program |
| Data storage | Store a limited amount of data. | Store an unlimited amount of information. |
| Capacity | Store up to a maximum of 4 KB of data in a browser. | There is a maximum memory restriction of 128 megabytes that a script may consume at one time. However, we are free to maintain as much data as we like within a session. |
| Function | It is not necessary for us to execute a function in order to get cookies going because they are stored on the local computer. | Utilizing the session start()method is required before we can begin the session. |
| Data Format | Store information in a text file. | The data is saved in an encrypted format during sessions.
| Storage | Limited amount of data.| Unlimited amount of data. |
---
# Error Handling in PHP

#### Error handling in PHP ensures that scripts manage errors properly instead of displaying raw error messages. Below are key techniques for error handling in PHP.

1- Basic Error Handling with die() `Use die() to stop script execution if an error occurs.`

```
if (!file_exists("mytestfile.txt")) {
    die("Error: The file does not exist.");
}
```

2- Custom Error Handlers `Define a function to handle errors and use set_error_handler().`

```
function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr";
}
set_error_handler("customError");

echo($undefinedVar); // Triggers an error
```

3- Triggering Errors with trigger_error() `Use trigger_error() to generate user-defined errors.`

```
$value = 2;
if ($value >= 1) {
    trigger_error("Value must be 1 or below", E_USER_WARNING);
}
```

4- Logging Errors `PHP logs errors to a file or server logs by default. Use error_log() to log errors manually.`

```
error_log("Custom error message", 3, "errors.log");
```

5- Sending Error Reports via Email `Errors can be sent via email using error_log().`

```
function customError($errno, $errstr) {
    error_log("Error: [$errno] $errstr", 1, "admin@example.com", "From: webmaster@example.com");
}
```

6- PHP Error Levels

| Value | Constant | Description |
|-------|----------|-------------|
| 1 | E_ERROR | Fatal run-time error, execution stops. |
| 2 | E_WARNING | Non-fatal warning, script continues. |
| 8 | E_NOTICE | Possible issue, script continues. |
| 256 | E_USER_ERROR | Fatal user-generated error. |
| 512 | E_USER_WARNING | Non-fatal user-generated warning. |
| 1024 | E_USER_NOTICE | User-generated notice. |
| 8191 | E_ALL | All errors and warnings.|


### Best Practices

- Log critical errors instead of displaying them.

- Use `set_error_handler()` for custom error handling.

- Avoid exposing error details to users for security reasons.

### Pro Tip: For debugging, enable error reporting in php.ini:

```
error_reporting(E_ALL);
display_errors = On;
```

---
# How PHP Executes Code.
- Stage 1 : Lexing
- Stage 2 : Parsing
- Stage 3 : Compilation
- Stage 4 : Interpretation
---
## Resources
- [W3schools - PHP Overview ](https://www.w3schools.com/PHP/php_intro.asp)  
- [Scaler - PHP Error Types](https://www.scaler.com/topics/php-tutorial/types-of-errors-in-php)
- [Geeks For Geeks - PHP echo vs print ](https://www.geeksforgeeks.org/php-echo-print)
- [Why Is PHP Partially Case-Sensitive? ](https://www.php.cn/faq/1796692981.html)
- [Scaler Academy - Programming language vs scripting language](https://www.interviewbit.com/blog/scripting-language-vs-programming-language/)
- [Pythonista Planet - Dynamically typed vs statically typed language. ](https://pythonistaplanet.com/difference-between-statically-and-dynamically-typed-languages/)
- [FreeCodeCamp- Assign by Value VS Assign by Reference](https://www.freecodecamp.org/news/understanding-by-reference-vs-by-value-d49139beb1c4/)
- [TutorialsPoint - What is the difference between for and foreach loop in PHP?](https://www.tutorialspoint.com/difference-between-for-and-foreach-in-php)
- [TutorialsPoint - Sessions vs Cookies](https://www.tutorialspoint.com/What-is-the-difference-between-session-and-cookies)
- [W3schools - Error Handling in PHP ](https://www.w3schools.com/php/php_error.asp)
- [SitePoint - How PHP Executes Code ](https://www.sitepoint.com/how-php-executes-from-source-code-to-render/)
