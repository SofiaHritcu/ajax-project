<?php
$connection = new mysqli("127.0.0.1","root","","pw");
if ($connection -> connect_error){
    die("Connection failed".$connection -> connect_error);
}

$id = $_GET['id'];
getAttributesById($connection,$from);

function getAttributesById($conn,$id){
    $sqlCommand = "SELECT * FROM shoppings where id = '".$id."'";
    $res = mysqli_query($conn,$sqlCommand);
    while ($row = mysqli_fetch_array($res)){
        echo $row['name'].",".$row['quantity'].",".$row['comments'].",".$row['discount'].",";
    }
    mysqli_close($conn);
}