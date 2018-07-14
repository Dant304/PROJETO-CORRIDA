<?php

    $nome = $_POST["nome"];
    $data = $_POST["data"];
    $cpf = $_POST["cpf"];
    $genero = $_POST["genero"];

    $link = mysqli_connect("localhost", "root", "", "corrida");
 
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
     
    // Attempt insert query execution
    $sql = "INSERT INTO passageiro (Nome, data, cpf, genero) VALUES ('$nome','$data','$cpf','$genero')";
    if(mysqli_query($link, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
     
    // Close connection
    mysqli_close($link);
    header('Location: ../cadastrar.html'); 
    ?>
    

?>