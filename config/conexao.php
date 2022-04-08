<?php 

$host = "localhost"; 
$pass = ""; 
$db = "agenda"; 
$user = "root";

try{

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

}catch (PDOException $e) {
    //Erro de conexão
    $error = $e->getMessage(); 
    echo "Erro: $error"; 
}
