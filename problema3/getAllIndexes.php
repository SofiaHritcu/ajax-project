<?php
$connection = new mysqli("127.0.0.1","root","","pw");
if ($connection -> connect_error){
    die("Connection failed".$connection -> connect_error);
}

getAllIndexes($connection);

function getAllIndexes($conn){
    $sqlCommand = "SELECT id FROM shoppings ";
    $res = mysqli_query($conn,$sqlCommand);
    while ($row = mysqli_fetch_array($res)){
        echo "<li id = "."elemList".">".$row['id']."</li>";
    }
    mysqli_close($conn);
}