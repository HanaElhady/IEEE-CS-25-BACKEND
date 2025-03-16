# Who invent OOP and Why

> “I made up the term ‘object-oriented’, and I can tell you I didn’t have C++ in mind.”  
> — Alan Kay, OOPSLA ‘97


 The big idea was to use encapsulated mini-computers in software which communicated via message passing rather than direct data sharing — to stop breaking down programs into separate “data structures” and “procedures”.

---

 # Abstraction VS Encapsulation

| Abstraction |	Encapsulation |
|-------------|---------------|
| The process of hiding complex implementation details and exposing only the essential features of an object or system. |	The process of hiding the internal details of an object or system and exposing only the necessary information to the outside world. |
| Focuses on the external behavior and functionality of an object or system.	| Focuses on protecting the internal state and behavior of an object or system. |
| We achieve it using abstract classes, interfaces, and inheritance. |	We implement it using classes, interfaces, and access modifiers such as private, public, protected, etc. |
| It allows developers to create simpler, more modular code that is easier to understand and maintain. |	It allows developers to create more secure, robust code that is less prone to bugs and errors. |
| Useful for creating generic code that can be used in a variety of contexts. |	Useful for creating objects and systems that can be used in complex environments without compromising their internal state or behavior. |
| Necessary for design patterns. |	Enforces data integrity and prevents unauthorized access to sensitive information. |
---

# Inheritance
Inheritance is one of the core features of object-oriented programming. It’s a programming procedure that allows you to reuse code by referencing the behaviors and data of an object. In other words, a class that inherits from another class shares all the attributes and methods of the referenced class.

---

# PHP Interfaces & Polymorphism

# PHP Polymorphism vs PHP Interfaces

## 🔹 Key Differences

| Feature             | Polymorphism (Abstract Class)   | Interfaces                    |
|---------------------|--------------------------------|-------------------------------|
| **Definition**      | Allows objects of different classes to respond differently to the same method | Defines a contract that classes must implement |
| **Implementation**  | Uses `abstract class` with abstract & concrete methods | Uses `interface` with only method signatures |
| **Multiple Inheritance** | ❌ Not allowed | ✅ Allowed (a class can implement multiple interfaces) |
| **Method Implementation** | Can have **default method implementations** | Cannot have method implementations (only signatures) |
| **Code Reusability** | Provides reusable base methods | Ensures method consistency across classes |
| **Flexibility**     | More flexible with partial implementation | Strict contract with full implementation required |
| **Use Case**        | When you want some shared behavior among related classes | When unrelated classes should follow the same structure |
| **Example**         | `abstract class Person { abstract function greet(); }` | `interface Greeting { function greet(); }` |

##  When to Use What?
- **Use Abstract Classes when:**
  - You have some shared functionality that should be inherited.
  - You want to provide **default behavior** in the base class.

- **Use Interfaces when:**
  - You need **multiple inheritance**.
  - You want to define a **strict contract** for multiple unrelated classes.

---
**Both help in achieving polymorphism, but interfaces enforce structure while abstract classes allow partial implementation.** 

---

# Php Traits
 # PHP Traits Summary

- **Purpose**: Traits provide a way to reuse methods across different classes that are not part of the same inheritance hierarchy, enabling horizontal code reuse.
- **Definition**: A trait is defined using the `trait` keyword and contains methods that can be "injected" into multiple classes.
- **Usage**: Use the `use` keyword inside a class to include the trait’s methods.
- **Multiple Traits**: A class can include several traits simultaneously.
- **Composition**: Traits can use other traits to compose more complex behaviors.
- **Conflict Resolution**: When multiple traits provide methods with the same name, you can resolve conflicts using the `insteadof` operator or create method aliases using the `as` operator.

Traits allow for flexible code sharing without the tight coupling that comes with traditional inheritance.

---

# Late static binding & how it works

Late Static Bindings (LSB) in PHP allow referencing the called class in a **static inheritance** context.  

**How It Works:**  
- LSB stores the class name from the last **non-forwarding call** (the explicitly named class).  
- `static::` resolves at **runtime**, unlike `self::`, which binds to the defining class.  
- `get_called_class()` retrieves the name of the called class.  

**Key Differences:**  
| Feature           | `self::` | `static::` |
|------------------|---------|-----------|
| **Binding Type** | Early (compile-time) | Late (runtime) |
| **Resolves To** | Defining class | Called class |
| **Use Case** | Fixed method resolution | Dynamic method resolution |

**Why Use LSB?**  
- Enables **runtime polymorphism** in static contexts.  
- Supports **overridable** static methods in inheritance chains.  

**LSB ensures that static methods behave dynamically based on the called class instead of the class where they are defined.**
---

# Using OOP with MySQL (PDO & MySQLi)

**PHP Data Objects (PDO)** provides a **database abstraction layer** that allows executing SQL queries across multiple database systems (MySQL, PostgreSQL, Oracle, etc.) using the same functions.  

**Why Use PDO?**  
- Supports multiple database systems.  
- Allows easy switching between databases without code changes.  
- Provides a secure way to handle database operations using prepared statements.  

**CRUD Operations in PHP with PDO:**  
1. **Fetch** – Retrieve and display user data.  
2. **Insert** – Add new user data to the database.  
3. **Update** – Modify existing records.  
4. **Delete** – Remove records from the database.  

**Approach Used:**  
- **Object-Oriented Programming (OOP)** in PHP.  
- **Bootstrap** for styling forms and tables.  

This implementation ensures a **secure, scalable, and reusable** database interaction method using PDO. 

---

# Factory PatternAnonymous Classes

The factory pattern defers instantiation logic of a parent abstract class to its concrete sub-classes. At the time of object creation, the specific class type may not be known, in which a creator class’ factory method is used to decouple this identifying logic. This is typically done through the methods, parameters, and a switch statement.

---

# Anonymous Classes

**What are Anonymous Classes?**  
Anonymous classes in PHP allow developers to **declare and instantiate classes on-the-fly** without a formal class definition.  

**Key Features:**  
- Introduced in **PHP 7**.  
- Useful for **one-time** or **short-lived objects**.  
- Reduces **boilerplate code** for simple tasks.  
- Can **extend classes** and **implement interfaces** like regular classes.  

**Use Cases:**  
- Creating quick **mock objects**.  
- Implementing **simple callbacks**.  
- Avoiding **global class definitions** for small logic blocks.  

Anonymous classes enhance **flexibility and code organization** by providing a **lightweight alternative** to traditional class definitions.
---

# MVC Architecture

**What is MVC?**  
MVC (**Model-View-Controller**) is a software design pattern that separates an application into three main components:  

- **Model**: Manages the data, business logic, and application rules.  
- **View**: Handles the user interface and presents data from the Model.  
- **Controller**: Processes user input, updates the Model, and refreshes the View.  

**Key Benefits:**  
- **Separation of Concerns** – Enhances code organization and maintainability.  
- **Reusability** – Components can be reused across projects.  
- **Scalability** – Supports modular application growth.  
- **Testability** – Each component can be tested independently.  

**Challenges:**  
- Complexity in small applications.  
- Requires a learning curve for new developers.  
- Higher overhead due to component synchronization.  

**Implementation Strategies:**  
- **Use MVC frameworks** (Django, Angular, Ruby on Rails).  
- **Ensure modular design** for better maintainability.  
- **Adopt asynchronous programming** for efficient request handling (e.g., async database queries, AJAX for dynamic UI updates).  

**Popular MVC Frameworks:**  
- **Django** (Python)  
- **Ruby on Rails** (Ruby)  
- **Angular** (TypeScript)  

MVC is widely used in modern web and software development for its **structured, scalable, and maintainable** approach. 🚀
---
 # Resourcss 

- [ Medium - The Forgotten History of OOP](https://medium.com/javascript-scene/the-forgotten-history-of-oop-88d71b9b2d9f)
- [ Baeldung - Abstraction VS Encapsulation](https://www.baeldung.com/cs/abstraction-vs-encapsulation)
- [ Codecademy - Inheritance](https://www.codecademy.com/resources/blog/what-is-inheritance/)
- [ Php Tutorial - PHP Polymorphism](https://www.phptutorial.net/php-oop/php-polymorphism/)
- [ Php Tutorial - Php interface](https://www.phptutorial.net/php-oop/php-interface/)
- [ Php Tutorial - Php Traits](https://www.phptutorial.net/php-oop/php-traits/)
- [ Php - Late static binding & how it works](https://www.php.net/manual/en/language.oop5.late-static-bindings.php)
- [ Codex World - Using OOP with MySQL (PDO & MySQLi)](https://www.codexworld.com/php-oop-crud-operations-pdo-extension-mysql/)
- [ Codecademy - Factory PatternAnonymous Classes](https://www.codecademy.com/resources/docs/general/creational-design-patterns/factory-pattern)
- [ Slingacademy - Anonymous Classes](https://www.slingacademy.com/article/anonymous-classes-in-php-a-practical-guide/)
- [ Geeks For Geeks - MVC Architecture](https://www.geeksforgeeks.org/mvc-architecture-system-design/)
