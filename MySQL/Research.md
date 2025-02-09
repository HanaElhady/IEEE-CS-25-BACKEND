# What is a Database and Why Does it Exist?

A database is an organized collection of structured information, or data, typically stored electronically in a computer system. A database is usually controlled by a database management system (DBMS). Together, the data and the DBMS, along with the applications that are associated with them, are referred to as a database system, often shortened to just database.

# What is SQL?

SQL (Structured Query Language) is a specialized programming language designed for managing and manipulating data stored in relational databases. It allows users to perform various operations on the data, such as querying, updating, inserting, and deleting records. SQL is widely used in database systems like MySQL, SQL Server, Oracle, and PostgreSQL.

# What is the History of MySQL?

MySQL, a Swedish company, was credited for being the founder of the MySQL database server. Three engineers—David Axmark, Allan Larsson, and Michael Widenius—started their work on the MySQL server development in 1995. They released their first MySQL server on the same date.

Later, a US tech firm named **Sun Microsystems** took complete ownership after purchasing **MySQL AB**. In 2010, **Oracle**, a US tech giant, acquired Sun Microsystems, making MySQL an Oracle-owned product today.

# What Are the Top 5 Most Famous Databases in the World (2025)?

As of 2025, the top five most popular database management systems (DBMS) are:

1. **Oracle Database**
2. **MySQL**
3. **Microsoft SQL Server**
4. **PostgreSQL**
5. **MongoDB**

These databases have gained prominence due to their **performance, scalability, and specific advantages** for different types of applications. Their widespread adoption across various industries underscores their effectiveness in meeting diverse data management needs.

## Resources

- [Oracle - What is a Database?](https://www.oracle.com/database/what-is-database/)
- [GeeksforGeeks - What is SQL?](https://www.geeksforgeeks.org/what-is-sql/)
- [The Crazy Programmer - History of MySQL](https://www.thecrazyprogrammer.com/2021/09/history-of-mysql.html)
- [Statista - Database Popularity Ranking](https://www.statista.com/statistics/809750/worldwide-popularity-ranking-database-management-systems/)


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
| **Distributed Database** |  Not supported |  Supported |
| **Examples** | File systems, XML | MySQL, PostgreSQL, SQL Server, Oracle |

**Conclusion**: RDBMS is an **advanced form of DBMS**, offering better **data integrity, security, and scalability**.

---

##  Naming Conventions

When working with databases, **consistent naming conventions** improve **readability and maintainability**.  

###  Best Practices:
- **Use lowercase and underscores** → `customer_orders`  vs `CustomerOrders` 
- **Singular table names** → `user`  vs `users`  
- **Consistent primary key naming** → `id` or `tablename_id`  
- **Avoid special characters and spaces** (use `_` instead)  
- **Use descriptive column names** → `created_at`  vs `date` 
---

## Resources

-  [MySQL Naming Conventions](https://medium.com/@centizennationwide/mysql-naming-conventions-e3a6f6219efe)
-  [GeeksforGeeks - RDBMS Overview](https://www.geeksforgeeks.org/rdbms-full-form/)  
-  [JavaTpoint - Difference Between DBMS and RDBMS](https://www.javatpoint.com/difference-between-dbms-and-rdbms)  

---

