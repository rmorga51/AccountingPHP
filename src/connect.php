<?php 
$mysqli = new mysqli("accountinganywhere-mysqldbserver.mysql.database.azure.com", "mysqldbuser@accountinganywhere-mysqldbserver", "Password_1", "accounting");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";
?>