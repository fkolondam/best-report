  
<?php

// Server in the this format: <computer>\<instance name> or 
// <server>,<port> when using a non default port number
/*
$server = 'DESKTOP2\BESTSERVER';
$connectionInfo = array( "Database"=>"DB_BEST");
// Connect to MSSQL
$link = sqlsrv_connect($server, 'sa', 'bestpwd');

	// Select a database:
$pilih_db=mssql_select_db('DB_BEST') 
   or die('Could not select a database.');
*/ 

$serverName = 'DESKTOP2\BESTSERVER';
$connectionInfo = array( "Database"=>"DB_BEST", "UID"=>"sa", "PWD"=>"bestpwd");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<hr /><br />";
}else{
     echo "Connection could not be established.<hr /><br />";
     die( print_r( sqlsrv_errors(), true));
}
?>