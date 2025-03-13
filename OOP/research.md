# Who invent OOP and Why

“I made up the term ‘object-oriented’, and I can tell you I didn’t have C++ in mind.” ~ Alan Kay, OOPSLA ‘97

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

 # Resourcss 

- [Medium - The Forgotten History of OOP](https://medium.com/javascript-scene/the-forgotten-history-of-oop-88d71b9b2d9f)
- [Baeldung - Abstraction VS Encapsulation](https://www.baeldung.com/cs/abstraction-vs-encapsulation)
- [Codecademy - Inheritance](https://www.codecademy.com/resources/blog/what-is-inheritance/)
- [ Php Tutorial - PHP Polymorphism](https://www.phptutorial.net/php-oop/php-polymorphism/)
- [ Php Tutorial - Php interface](https://www.phptutorial.net/php-oop/php-interface/)
- [ Php Tutorial - Php Traits] (https://www.phptutorial.net/php-oop/php-traits/)
