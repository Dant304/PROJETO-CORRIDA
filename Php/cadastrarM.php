<?php
    $nome = $_POST["nome"];
    $data = date("d-m-Y", strtotime($_POST["data"]));
    $cpf = $_POST["cpf"];
    $modelo = $_POST["modelo"];
    $status = $_POST["status"];
    $genero = $_POST["genero"];
    
    $link = mysqli_connect("localhost", "root", "", "corrida");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO motorista (Nome, data, cpf, modelo, status, genero) VALUES ('$nome','$data','$cpf','$modelo','$status','$genero')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
header('Location: ../cadastrar.html'); 
?>
