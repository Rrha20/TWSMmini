<?php
/*

Database name :	db677415121-1
Host name :	localhost
User name :	dbo677415121
Description :	TWSM-database
Version :	MySQL5.5
Status :	setup started
The database setup takes about 5 minutes. You can see the current setup status in the database overview.

*/

$host_name  = "localhost";
$database   = "books";
$user_name  = "localhost";
$password   = "tpc87mzh";
$connect = mysqli_connect($host_name, $user_name, $password, $database);
if(mysqli_connect_errno())
	echo '<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>';
else
    echo '<p>Connection to MySQL database ' . $database . ' successfully established.</p>';



//FOLLOWING CREATES THE TABLE


//sql to create table
/*
 $sql = "CREATE TABLE books (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 title VARCHAR(50),
 author VARCHAR(30) NOT NULL,
 year DATE,
 genre VARCHAR (30),
 price DECIMAL(10,2)
 )";

 if (mysqli_query($connect, $sql)) {
     echo "Table books created successfully";
 } else {
     echo "Error creating table: " . mysqli_error($connect);
 }
*/
/*
Inserting data into the table
=============================

    - The SQL query must be quoted in PHP
    - String values inside the SQL query must be quoted
    - Numeric values must not be quoted
    - The word NULL must not be quoted
*/

//Following inserts records into the table

 $sql = "INSERT INTO books (title, author, year, genre, price)
 VALUES ('a tale of two cities', 'Charles Dickens', '1859-01-01', 'history', 599.00)";
 

if (mysqli_query($connect, $sql)) {
 	$last_id = mysqli_insert_id($connect);
     echo "<br/>New record created successfully. Last inserted
    ID is: " . $last_id . "<br>";
} else {
     echo "<br/>Error: " . $sql . "<br>" . mysqli_error($connect);
}



//DELETING A RECORD FROM THE TABLE
/*
$sql = "DELETE FROM books WHERE id=2";

if (mysqli_query($connect, $sql)) {
    echo "<br/>Record deleted successfully";
} else {
    echo "<br/>Error deleting record: " . mysqli_error($connect);
}
*/

/*
*/
/*
UPDATING DATA IN A TABLE
*/
/*
$sql = "UPDATE books SET lastname='Gyllenhal' WHERE id=3";

if (mysqli_query($connect, $sql)) {
    echo "<br/>Record updated successfully<br>";
} else {
    echo "<br/>Error updating record: " . mysqli_error($connect);
}


/*
SELECTING DATA FROM THE TABLE
=============================
*/

$sql = "SELECT id, title, author, year, genre, price FROM books";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br/>id: " . $row["id"]. " - Name: " . $row["title"]. " " . $row["author"]. " " . $row["year"]. " " . $row["genre"] ." ". $row["price"]. "<br>";
    }
} else {
    echo "0 results";
}

//Delete table 
/*
$sql = "DROP TABLE books";

if (mysqli_query($connect, $sql)) {
    echo "Table books successfully deleted";
} else {
    echo "Error deleting table: " . mysqli_error($connect);
}
*/
mysqli_close($connect);
?> 
