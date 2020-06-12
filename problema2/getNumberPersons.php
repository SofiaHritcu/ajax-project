<?php
$connection = new mysqli("127.0.0.1","root","","pw");
if ($connection -> connect_error){
    die("Connection failed".$connection -> connect_error);
}

getAllDepartures($connection);

function getAllDepartures($conn){
    $sqlCommand = "SELECT COUNT(*)  FROM persons ";
    $res = mysqli_query($conn,$sqlCommand);
    echo $res;
    mysqli_close($conn);
}