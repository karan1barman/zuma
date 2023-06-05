<?php

$username = "username"; // name as database name 
$password = "password"; // encrypted password that makes our data secure, needed to be same as xampp configure password
$servername = "localhost"; // server name 
$database = "local_db"; // database name 

// create connection between php and database 

$server = mysqli_connect($username, $servername, $password); // id's that connect to sql server

if(!$server){
    die("connection failed"." not able to connect"); //die is a command which is used to print the data just like echo command but stops the code once it is executed while echo command performs the test of the code 
} else {
    echo "connection established"
}

$connection = mysql_select_db($database, $server); // request data from database

$query = mysql_query($myquery); // 

if(!$query){
    echo mysql_error();
    die;

    // encode data to json format 
    echo json_encode($data);

    //close connection
    mysql_close($server);
}
?>