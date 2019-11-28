<?php

/* 
你好. Hello. <<< (utf-8 test by including asian language chars here)

START OF THE README SECTION. 
This is the email gathering web database script that consists of a single input textbox on a web page that validates email addresses before proceeding to store them into a MySQL database.
Instructions:
1.Use the "...Create Table..." script below to create your MySQL database.
2.update the user, password, server and db section, below to reflect your MySQL connection credentials. 
3.copy this .php file to your web server using FTP or other means.
4.you're done. now you can browse to the .php page and can see whether the script connects to, and fetches data from, the database.
END OF THE README SECTION
*/



/*
CREATE TABLE `table1` (
  `varchar1` varchar(250)
) ;

INSERT INTO `table1` (`varchar1`) VALUES('hello world!');
INSERT INTO `table1` (`varchar1`) VALUES('hello again!');
INSERT INTO `table1` (`varchar1`) VALUES('howdy there.');
INSERT INTO `table1` (`varchar1`) VALUES('this is the fourth row.');

*/



$servername = "localhost";
$username = "_samplu";
$password = "******";
$dbname = "_sampl";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT `varchar1` FROM `table1`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["varchar1"]. "<br />";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
