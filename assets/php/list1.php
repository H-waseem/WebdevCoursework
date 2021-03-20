<?php
// include connection settings
require_once "connectdb.php";
// select details for all students
$query = "SELECT * FROM students";
// perform the query
if ($result = $db->query($query)) {
 // loop through and print out the results
 while ($row = $result->fetch_assoc()) {
 echo "<pre>";
 print_r($row);
 echo"</pre>";
 }
// if there was an error with your query, this will display it
} else {
 echo "SQL Error: " . $db->error;
}
?>