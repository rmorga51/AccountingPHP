<?php 
$mysqli = new mysqli("accountinganywhere-mysqldbserver.mysql.database.azure.com", "mysqldbuser@accountinganywhere-mysqldbserver", "Password_1", "accounting");
if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}
else{
   echo 'Try harder man'; 
}
//echo $mysqli->host_info . "\n";
?>