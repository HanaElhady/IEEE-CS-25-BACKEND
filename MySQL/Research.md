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
#  Difference between Primary Key and Unique key

| Comparison Basis | **Primary Key** | **Unique Key** |
|---------|---------|----------|
| **Basic** | The primary key is used as a unique identifier for each record in the table | The unique key is also a unique identifier for records when the primary key is not present in the table |
| **NULL** | We cannot store NULL values in the primary key column | We can store NULL value in the unique key column, but only one NULL is allowed |
| **Purpose** | It enforces entity integrity | It enforces unique data |
| **Index** | The primary key, by default, creates clustered index | The unique key, by default, creates a non-clustered index |
| **Number of Key** | Each table supports only one primary key | A table can have more than one unique key |
| **Value Modification** | We cannot change or delete the primary key values | We can modify the unique key column values | 
| **Uses** | It is used to identify each record in the table | It prevents storing duplicate entries in a column except for a NULL value |

---
# Constraints in MySQL
SQL constraints are rules applied to database tables to ensure data integrity, accuracy, and consistency. These constraints prevent invalid data entry and help maintain database reliability.

### Types of SQL Constraints:
1. **NOT NULL Constraint** → `
Ensures that a column cannot contain NULL values. `

2. **UNIQUE Constraint** → `
Ensures that values in a column are distinct. `

3. **PRIMARY KEY Constraint** → `
A combination of NOT NULL and UNIQUE that uniquely identifies each row.`

4. **FOREIGN KEY Constraint** → `
Establishes a relationship between two tables, ensuring referential integrity.`

5. **CHECK Constraint** → `
Ensures that a column meets specific conditions before inserting data.`

6. **DEFAULT Constraint** → `
Assigns a default value to a column when no value is provided.`

---

# Indexing in MySQL
### How MySQL Uses Indexes
Indexes in MySQL improve query performance by allowing faster data retrieval. Without an index, MySQL scans the entire table, which is inefficient for large datasets. With an index, MySQL can locate data quickly, reducing search time.

### Key Uses of Indexes:

1. **Speeding Up Searches** → `  Indexes help quickly find rows matching a WHERE clause.`
2. **Filtering Efficiently** → ` MySQL selects the most selective index to reduce the number of rows scanned.`
3. **Using Multi-Column Indexes** → ` Any leftmost prefix of a multi-column index can be used for lookups.`
4. **Optimizing Joins** → ` Indexes speed up joins when columns in related tables have the same data type and size.`
5. **Handling MIN() & MAX()** → ` MySQL optimizes queries for indexed columns using single key lookups.`
6. **Sorting & Grouping Faster** → ` Indexes improve ORDER BY and GROUP BY performance when applied to indexed columns.`
7. **Covering Indexes** → ` If all required columns are in an index, MySQL retrieves data without accessing the table.`

### When Not to Use Indexes:
For small tables where scanning is fast.
When most rows are needed, as sequential reads may be more efficient than index lookups.

---

# 🌟Difference between MySQL and Postgresql

| | PostgreSQL | MySQL |
|---------|---------|----------|
|**Large-scale applications**| ✅ Robust & scalable | ⚠️ Limited for heavy loads |
|**Geospatial data**|	✅ PostGIS support | ⚠️ Basic support |
|**JSON & NoSQL-like support**|	✅ Strong JSON/JSONB support	| ⚠️ Limited JSON support |
|**Read-heavy workloads (e.g., web apps)**|	⚠️ Decent, but not optimized | ✅ Excellent performance |
|**Complex, concurrent read-write operations**|	✅ Superior |	⚠️ May face locking issues |
|**Quick setup for small web projects**| ⚠️ Takes longer to configure |	✅ Fast & easy setup |
|**Data warehousing & analytics**| ✅ Excellent indexing & parallel queries	| ⚠️ Lacks advanced features |

## Final Thoughts
Use PostgreSQL for complex, scalable applications requiring advanced features.
Use MySQL for lightweight applications with high read performance and ease of setup.

---

## Resources

-  [JavaTpoint - Difference between Primary Key and Unique key](https://www.tpointtech.com/primary-key-vs-unique-key)
-  [GeeksforGeeks - Constraints in MySQL](https://www.geeksforgeeks.org/sql-constraints/)
-  [Mysql - Indexing in MySQL](https://dev.mysql.com/doc/refman/8.4/en/mysql-indexes.html)
-  [Datacamp - Difference between MySQL and Postgresql ](https://www.datacamp.com/blog/postgresql-vs-mysql)

---

# Relations (one to one, one to many, many to many)

### One-to-One Relationship  
Each record in Table A is associated with one and only one record in Table B, and vice versa.  

### One-to-Many Relationship  
Each record in Table A can be associated with multiple records in Table B, but each record in Table B is associated with only one record in Table A.  

### Many-to-Many Relationship  
Each record in Table A can be associated with multiple records in Table B, and vice versa.  

---
# Write-ahead logging

`Write-Ahead Logs are a powerful technique that ensures data durability in distributed systems. By persisting every state change as a command in an append-only log, Write-Ahead Logs allow systems to recover their state even after server failures. This durability guarantee is essential for maintaining data consistency and reliability in modern distributed environments.`

---

# What are normalization and denormalization? .

| Basis for Comparison  | Normalization  | Denormalization  |
|-----------------------|---------------|------------------|
| **Basic**            | Process of creating a structured schema to store non-redundant and consistent data. | Process of combining data to improve query performance. |
| **Purpose**         | Reduces data redundancy and inconsistency. | Improves query execution speed by introducing redundancy. |
| **Used in**         | OLTP systems (focus on insert, update, delete efficiency and data quality). | OLAP systems (focus on fast search and analysis). |
| **Data Integrity**  | Maintained | May not be retained |
| **Redundancy**     | Eliminated | Introduced |
| **Number of Tables** | Increases | Decreases |
| **Disk Space**      | Optimized usage | Higher usage due to redundancy |


## Resource
- [GeeksforGeeks - Relationships in SQL](https://www.geeksforgeeks.org/relationships-in-sql-one-to-one-one-to-many-many-to-many/)
- [Medium - Write-ahead logging](https://medium.com/@abhi18632/understanding-write-ahead-logs-in-distributed-systems-3b36892fa3ba)
- [Tech Differences - Difference between normalization and denormalization](https://techdifferences.com/difference-between-normalization-and-denormalization.html)
