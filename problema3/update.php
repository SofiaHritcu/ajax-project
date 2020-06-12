<?php

$conn = new mysqli("localhost", "root", "","pw");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlCommand = "UPDATE shoppings
SET name = '".$_POST['name']."', quantity = '".$_POST['quantity']."', comments = '".$_POST['comments']."', discount = '".$_POST['discount']."'
WHERE id =".$_POST['id'].";";

if($conn->query($sqlCommand) == TRUE)
    echo "Salvat!";
else
    echo "Nu s-a putut salva!";