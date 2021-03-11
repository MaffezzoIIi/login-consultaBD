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
    echo "funcionou";
    //header("location:exibir.php");
  }
}
else {
  echo"Você não realizou o upload de forma satisfatória.";
}



$ID = $_POST["id"];
$secao = $_POST["secao"];
$tittle = $_POST["titulo"];
$subtitulo = $_POST["subtitulo"];
$texto = $_POST["texto"];
$subtexto = $_POST["subtexto"];
$itenslista = $_POST["itenslista"];
$tipo = $_POST["tipo"];


$sql = "UPDATE weg 
        SET secao = '$secao',
        Titulo = '$tittle',
        SubTitulo = '$subtitulo',
        Texto = '$texto',
        SubTexto = '$subtexto',
        ItensLista = '$itenslista',
        Img = '$nomeFinal',
        Tipo = '$tipo'
        WHERE ID = '$ID'; ";

$result = $conn->query($sql);
header("location: ../paginas/consulta.php")



?>