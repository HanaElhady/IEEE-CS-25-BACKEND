#  What is RDBMS?

**RDBMS (Relational Database Management System)** is a type of database management system that stores and retrieves data in a **tabular format** with rows and columns.  

It was introduced by **E.F. Codd** in the 1970s and is the foundation of popular databases like:  
 **MySQL**  
 **PostgreSQL**  
 **SQL Server**  
 **Oracle**  

---

##  RDBMS vs DBMS

| Feature | **DBMS** | **RDBMS** |
|---------|---------|----------|
| **Storage** | Stores data as files | Stores data in tables |
| **Data Structure** | Hierarchical or navigational | Tabular with primary keys |
| **Normalization** | Not supported | Supported |
| **Security** | No strict integrity constraints | Ensures **ACID** properties (Atomicity, Consistency, Isolation, Durability) |
| **Relationships** | No relationships between tables | Tables are related using **primary/foreign keys** |
| **Scalability** | Suitable for small-scale applications | Supports large-scale applications with **multiple users** |
| **Distributed Database** | ❌ Not supported | ✅ Supported |
| **Examples** | File systems, XML | MySQL, PostgreSQL, SQL Server, Oracle |

**Conclusion**: RDBMS is an **advanced form of DBMS**, offering better **data integrity, security, and scalability**.

---

##  Naming Conventions

When working with databases, **consistent naming conventions** improve **readability and maintainability**.  

###  Best Practices:
- **Use lowercase and underscores** → `customer_orders` ✅ vs `CustomerOrders` ❌  
- **Singular table names** → `user` ✅ vs `users` ❌  
- **Consistent primary key naming** → `id` or `tablename_id` ✅  
- **Avoid special characters and spaces** (use `_` instead)  
- **Use descriptive column names** → `created_at` ✅ vs `date` ❌
---

## Resources

-  [MySQL Naming Conventions](https://medium.com/@centizennationwide/mysql-naming-conventions-e3a6f6219efe)
-  [GeeksforGeeks - RDBMS Overview](https://www.geeksforgeeks.org/rdbms-full-form/)  
-  [JavaTpoint - Difference Between DBMS and RDBMS](https://www.javatpoint.com/difference-between-dbms-and-rdbms)  

---

