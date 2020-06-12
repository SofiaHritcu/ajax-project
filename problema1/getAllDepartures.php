<?php
$connection = new mysqli("127.0.0.1","root","","pw");
if ($connection -> connect_error){
    die("Connection failed".$connection -> connect_error);
}

getAllDepartures($connection);

function getAllDepartures($conn){
    $sqlCommand = "SELECT DISTINCT departure FROM departuresArrivals ";
    $res = mysqli_query($conn,$sqlCommand);
    while ($row = mysqli_fetch_array($res)){
        echo "<li id = "."departure".">".$row['departure']."</li>";
    }
    mysqli_close($conn);
}