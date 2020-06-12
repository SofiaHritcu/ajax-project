<?php
$connection = new mysqli("127.0.0.1","root","","pw");
if ($connection -> connect_error){
    die("Connection failed".$connection -> connect_error);
}
$index = $_GET['index'] - 3;

getPrev($connection,$index);

function getPrev($conn,$index){
    $sqlCommand = "SELECT * FROM persons ";
    $res = mysqli_query($conn,$sqlCommand);
    $i = 0 ;
    while ($row = mysqli_fetch_array($res)){
        if ($i == $index || $i == $index - 1 || $i == $index - 2)
            echo "<p id = "."person".">"."FirstName:".$row['firstName'].";LastName:".$row['lastName'].";E-mail:".$row['email'].";Telefon:0".$row['phone']."</p><br>";
        $i = $i + 1;
    }
    mysqli_close($conn);
}