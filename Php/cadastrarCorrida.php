<?php

    $motorista = $_POST["motorista"];
    $passageiro = $_POST["passageiro"];
    $valor = $_POST["valor"];



$link = mysqli_connect("localhost", "root", "", "corrida");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO corridas (motorista, passageiro, valor) VALUES ('$motorista','$passageiro','$valor')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
header('Location: ../corridas.php'); 


?>