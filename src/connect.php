<?php 
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:anywhereaccounting1server.database.windows.net,1433; Database = accounting", "rmorga51", "Password_1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'connected to database successful :)';
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    echo 'connection unsuccessful :)';
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "rmorga51@anywhereaccounting1server", "pwd" => "Password_1", "Database" => "accounting", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:anywhereaccounting1server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
//print_r ($connectionInfo);
?>

