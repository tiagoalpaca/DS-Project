<?php
/*
$connectionInfo = array("Database" => "Universidade", "CharacterSet" => "UTF-8");
$server = 'ALEXANDRE-PC\SQLEXPRESS';

// Connect to MSSQL
$conn = sqlsrv_connect($server, $connectionInfo);

if (!$conn) {
    die('Something went wrong while connecting to SQLSrv');
}
*/

/* PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:servidorbdprojsd.database.windows.net,1433; Database = BDProjSD", "Alessandra", "Camargo1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
*/

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Alessandra@servidorbdprojsd", "pwd" => "Camargo1", "Database" => "BDProjSD", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0, "CharacterSet" => "UTF-8");
$serverName = "tcp:servidorbdprojsd.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>