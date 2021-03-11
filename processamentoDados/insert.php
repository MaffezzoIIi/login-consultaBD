<?php 
session_start();

if($_SESSION["matricula"] == "") {
    header("location: ../index.php?msg=negado");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_weg";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$imagem = $_FILES["imagem"];

if($imagem != NULL) {
  $nomeFinal = time().'.jpg';
  if (move_uploaded_file($imagem['tmp_name'],'img/'.$nomeFinal)) {
    //header("location:exibir.php");
  }
}
else {
  echo"Você não realizou o upload de forma satisfatória.";
}



$ID = $_POST["id"];
$secao = $_POST["secao"];
$titulo = $_POST["titulo"];
$subtitulo = $_POST["subtitulo"];
$texto = $_POST["texto"];
$subtexto = $_POST["subtexto"];
$itenslista = $_POST["itenslista"];
$tipo = $_POST["tipo"];

$sql = "INSERT INTO weg 
        VALUES (
        null,
        '$secao',
        '$titulo',
        '$subtitulo',  
        '$texto',
        '$subtexto',
        '$itenslista',
        '$nomeFinal',
        '$tipo',
        1
        );";

$result = $conn->query($sql);

header("location: ../paginas/consulta.php");
?>