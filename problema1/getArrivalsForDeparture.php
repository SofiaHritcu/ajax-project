<?php
$connection = new mysqli("127.0.0.1","root","","pw");
if ($connection -> connect_error){
    die("Connection failed".$connection -> connect_error);
}

$from = $_GET['d'];
getAllDepartures($connection,$from);

function getAllDepartures($conn,$from){
    $sqlCommand = "SELECT DISTINCT arrival FROM departuresArrivals where departure = '".$from."'";
    $res = mysqli_query($conn,$sqlCommand);
    while ($row = mysqli_fetch_array($res)){
        echo "<li id = "."arrival".">".$row['arrival']."</li>";
    }
    mysqli_close($conn);
}