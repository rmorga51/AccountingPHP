<?php 
$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "accountinganywhere-mysqldbserver.mysql.database.azure.com", "mysqldbuser@accountinganywhere-mysqldbserver", Password_1, accounting, 3306);
//echo $mysqli->host_info . "\n";
?>