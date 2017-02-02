<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost','root','','e-book');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

//MySqli Select Query
$results = $mysqli->query("SELECT BookID, BookName, BookDescription FROM books");

print '<table border="1">';
while($row = $results->fetch_assoc()) {
    print '<tr>';
    print '<td>'.$row["id"].'</td>';
    print '<td>'.$row["BookID"].'</td>';
    print '<td>'.$row["BookName"].'</td>';
    print '<td>'.$row["BookDescription"].'</td>';
    print '</tr>';
}  
print '</table>';
// Frees the memory associated with a result
$results->free();

// close connection
$mysqli->close();
?>