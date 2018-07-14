<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Corridas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/corrida.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./js/corrida.js"></script>
</head>
<body>
    <h1>Corridas</h1>
    <hr>
    <button type="button" id="registrar">Registrar Corrida</button>
    <button type="button" id="consultar">Consultar</button>
    <button type="button" onclick="sair()" id="sair">Sair</button>
    <hr>
    <div id="registrarCorrida">
        
        <?php

$link = mysqli_connect("localhost", "root", "", "corrida");

$sql = "SELECT id, nome, status, genero FROM motorista";
$result = $link->query($sql);

echo "<fieldset>";
 echo "<form action='./Php/cadastrarCorrida.php' method='POST'>";
echo "<label for='select'>MOTORISTA </label><br> <select required name='motorista'>";

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()){
      echo " <option value=" .$row["nome"]. ">" .$row["nome"]. "</option>";
}
echo " </select><br>"; 
}else {
     echo "0 results";
 }
     
 $sqlP = "SELECT nome FROM passageiro";
 $result = $link->query($sqlP);

 echo "<label for='select'>PAGEIRO </label><br> <select required name='passageiro'>";

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()){
      echo " <option value=" .$row["nome"]. ">" .$row["nome"]. "</option>";
}
echo " </select><br>"; 
}else {
     echo "0 results";
 }
echo "<input type='text' name='valor' id='valor' placeholder='Valor da viagem' required/><br>";
echo "<button type='submit'>Salvar</button> <button type='reset'>Cancelar</button>";
echo "</form>";
echo "<fieldset/>";
$link->close();
?>

    </div>
    <div id="dados">
    <?php
    $link = mysqli_connect("localhost", "root", "", "corrida");

    $sql = "SELECT motorista, passageiro, valor FROM corridas";
    $result = $link->query($sql);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Motorista</th>";
    echo "<th>Passageiro</th>";
    echo "<th>Valor</th>";
    echo "</tr>";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" .$row["motorista"]. "</td>";
                echo "<td>" .$row["passageiro"]. "</td>";
                echo "<td>" .$row["valor"]. "</td>";
                echo "</tr>";
        }
        echo " </table><br>"; 
        }else {
             echo "0 results";
         }

?>
        
    </div>
   
</body>
</html>