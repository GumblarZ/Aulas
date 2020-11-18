<?php 

function getConnection(){
//conexao com banco
$conn = new PDO('mysql:host=localhost;dbname=pdo;charset=utf8','root','');
return $conn;
}
