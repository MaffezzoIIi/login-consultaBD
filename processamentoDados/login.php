<?php
session_start();

if($_SESSION["matricula"] == "") {
    header("location: ../index.php?msg=negado");
}

if   (isset($_POST["matricula"]) && isset($_POST["senha"])) {
    $matricula = $_POST["matricula"];
    $senha = $_POST["senha"];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_weg";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT matricula, senha FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha'";
  $result = $conn->query($sql);
  
  if($result->num_rows > 0) {
    $_SESSION["matricula"] = $matricula;
    header("location: ../paginas/consulta.php");
 }
 else {
     header("location: ../index.php?msg=falhaacesso");
 }

?>