<?php 
$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "accountinganywhere-mysqldbserver.mysql.database.azure.com", "mysqldbuser@accountinganywhere-mysqldbserver", "Password_1", "accounting", 3306);
if (con->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}
else{
   echo 'Try harder man'; 
}
//echo $mysqli->host_info . "\n";
?>

