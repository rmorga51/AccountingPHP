/*<?php 
$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "accountinganywhere-mysqldbserver.mysql.database.azure.com", "mysqldbuser@accountinganywhere-mysqldbserver", Password_1, accounting, 3306);
//echo $mysqli->host_info . "\n";
?>*/

<?php
$config['db'] = array(
	'host'			=>'accountinganywhere-mysqldbserver.mysql.database.azure.com',
	'username'		=>'mysqldbuser@accountinganywhere-mysqldbserver',
	'password'		=>'Password_1',
	'dbname'		=>'accounting'
);
// set dbname to accounting before commit	

$db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['dbname'], $config['db']['username'], $config['db']['password']); 
$db->setATTRIBUTE(PDO::ATTR_EMULATE_PREPARES, false);
$db->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>