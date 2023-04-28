# TWSMmini

Download the zip file that was included in the link of the mail. Make sure that all the files are under “C:\xampp\htdocs”.
Run your XAMPP and start up your MYSQL and Apache. 
Click on admin in your XAMPP next to MYSQL. Create a new user called “localhost”, host name “localhost”, and password ”tpc87mzh” create a table named “books”. in this table. Go into “SQL” at the top and type in this after the SQL Table has been created:
“CREATE TABLE search (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30) NOT NULL
);

INSERT INTO ‘search’ VALUES
(1, ‘A tale of two cities’),
(2, ‘Dream of the red chamber’),
(3, ‘The hobbit’),
(4, ‘The little prince’),
(5, ‘Then there were none’);”

Open up your browser and type in http://localhost/Main.html
The browser should now display the website.
Happy book searching!
