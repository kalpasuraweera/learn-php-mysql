# learn-php-mysql

<h1>SELECT Query</h1>
<p>The SELECT query is used to retrieve data from one or more tables in a database.</p> 

<h3>Syntax</h3>

<i>SELECT column1, column2, ... FROM table_name WHERE condition;</i>
<ul>
    <li>"column1, column2, ...": The columns you want to retrieve data from.</li>
    <li>"table_name": The name of the table you want to retrieve data from.</li>
    <li>"condition": The condition that specifies which rows to retrieve.</li>
</ul>

<p>If you want to retrieve all columns from a table, you can use the * wildcard character instead of listing out each column name.</p>

<h3>Example</h3>
<i>SELECT * FROM students WHERE age > 18;</i>
<p>This SELECT query retrieves all columns from the students table where the age is greater than 18.</p>





<h1>INSERT Query</h1>
<p>The INSERT query is used to insert new rows into a table in a database.</p> 

<h3>Syntax</h3>

<i>INSERT INTO table_name (column1, column2, ...) VALUES (value1, value2, ...);</i>
<ul>
    <li>"table_name": The name of the table you want to insert data into.</li>
    <li>"column1, column2, ...": The columns you want to insert data into.</li>
    <li>"value1, value2, ...": The values you want to insert into the corresponding columns.</li>
</ul>

<p>You must specify a value for each column you are inserting data into.</p>



<h3>Example</h3>
<i>INSERT INTO students (name, age, gender) VALUES ('John', 20, 'Male');</i>
<p>This INSERT query inserts a new row into the students table with the name 'John', age 20, and gender 'Male'.</p>




<h1>UPDATE Query</h1>
<p>The UPDATE query is used to update existing rows in a table in a database.</p> 

<h3>Syntax</h3>

<i>UPDATE table_name SET column1 = value1, column2 = value2, ... WHERE condition;</i>
<ul>
    <li>"table_name": The name of the table you want to update.</li>
    <li>"column1, column2, ...": The columns you want to update.</li>
    <li>"value1, value2, ...": The new values you want to set for the corresponding columns.</li>
    <li>"condition": The condition that specifies which rows to update.</li>

</ul>

<p>You must specify a value for each column you are updating.</p>



<h3>Example</h3>
<i>UPDATE students SET age = 21 WHERE name = 'John';</i>
<p>This UPDATE query updates the age column of the students table to 21 for the row where the name column is 'John'.</p>




<h1>DELETE Query</h1>
<p>The DELETE query is used to delete existing rows from a table in a database.</p> 

<h3>Syntax</h3>

<i>DELETE FROM table_name WHERE condition;</i>
<ul>
    <li>"table_name": The name of the table you want to delete rows from.</li>
    <li>"condition": The condition that specifies which rows to delete.</li>
    
</ul>

<p>If you omit the WHERE clause, all rows in the table will be deleted.</p>



<h3>Example</h3>
<i>DELETE FROM students WHERE name = 'John';</i>
<p>This DELETE query deletes all rows from the students table where the name column is 'John'.</p>




<h1>JOIN Query</h1>
<p>The JOIN query is used to combine rows from two or more tables in a database based on a related column between them.</p> 

<h3>Syntax</h3>

<i>SELECT column1, column2, ... FROM table1 JOIN table2 ON table1.column = table2.column WHERE condition;</i>
<ul>
    <li>"column1, column2, ...": The columns you want to retrieve data from.</li>
    
    
</ul>

<p>If you omit the WHERE clause, all rows in the table will be deleted.</p>



<h3>Example</h3>
<i>DELETE FROM students WHERE name = 'John';</i>
<p>This DELETE query deletes all rows from the students table where the name column is 'John'.</p>



<h2>JOIN Queries</h2>
<p>Join queries are used to combine data from two or more tables into a single result set. Here's an example of an inner join:</p> 

<i>SELECT orders.order_id, customers.customer_name, orders.order_date <br>
    FROM orders <br>
INNER JOIN customers  <br>
ON orders.customer_id = customers.customer_id;
</i>

<p>This query selects the order_id, customer_name, and order_date columns from the orders and customers tables. The INNER JOIN clause joins the two tables on the customer_id column. Only rows with matching customer_id values in both tables will be returned.</p>

<h2>UPDATE Queries</h2>
<p>
    Update queries are used to modify data in a table. Here's an example:</p> 

<i>UPDATE customers <br>
    SET customer_name = 'John Smith', city = 'New York' <br>
    WHERE customer_id = 1;
</i>

<p>This query updates the customer_name and city columns in the customers table where the customer_id is 1.</p>




<h2>DELETE Queries</h2>
<p>
    Delete queries are used to delete rows from a table. Here's an example:</p> 

<i>DELETE FROM customers <br>
    WHERE customer_id = 1;
</i>

<p>This query deletes the row from the customers table where the customer_id is 1.</p>







