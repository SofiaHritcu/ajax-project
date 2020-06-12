<?php
$connection = new mysqli("127.0.0.1","root","","pw");
if ($connection -> connect_error){
    die("Connection failed".$connection -> connect_error);
}
$index = $_GET['index'] + 1;
$noPersons = $_GET['size'];

getAllDepartures($connection,$index,$noPersons);

function getAllDepartures($conn,$index,$noPersons){
    $sqlCommand = "SELECT * FROM persons ";
    $res = mysqli_query($conn,$sqlCommand);
    $i = 0 ;
    while ($row = mysqli_fetch_array($res)){
        if ($i == $index || $i == $index + 1 || $i == $index + 2)
            echo "<p id = "."person".">"."FirstName:".$row['firstName'].";LastName:".$row['lastName'].";E-mail:".$row['email'].";Telefon:".$row['phone']."</p><br>";
        $i = $i + 1;
    }
    mysqli_close($conn);
}