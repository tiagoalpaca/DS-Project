<?php
$connectionInfo = array("Database" => "Universidade", "CharacterSet" => "UTF-8");
$server = 'ALEXANDRE-PC\SQLEXPRESS';

// Connect to MSSQL
$conn = sqlsrv_connect($server, $connectionInfo);

if (!$conn) {
    die('Something went wrong while connecting to SQLSrv');
}
?>