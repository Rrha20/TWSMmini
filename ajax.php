<?php
//Including Database configuration file.

$host_name  = "localhost";
$database   = "books";
$user_name  = "localhost";
$password   = "tpc87mzh";
$connect = mysqli_connect($host_name, $user_name, $password, $database);
if(mysqli_connect_errno())
	echo '<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>';

//Getting value of "search" variable from "javascript.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
   $Query = "SELECT Name FROM search WHERE Name LIKE '%$Name%' LIMIT 5";
   $ExecQuery = mysqli_query($connect, $Query);
//Creating unordered list to display the result.
   echo '
<ul>
   ';
   //Fetching result from database.
   while ($Result = mysqli_fetch_array($ExecQuery)) {
       ?>
   <!-- Creating unordered list items.
        Calling javascript function named as "fill" found in "Javascript.js" file.-->
   <li onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
   <!-- Assigning searched result in "Search box" in "Main.html" file. -->
       <?php echo $Result['Name']; ?>
       </a></li>
   <?php
}}
?>
</ul>