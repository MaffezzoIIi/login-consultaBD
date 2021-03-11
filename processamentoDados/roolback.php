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

if   (isset($_GET["ID"])) {
    $ID = $_GET["ID"];
}

    $sql = "UPDATE weg SET Status = '1' WHERE $ID = ID";
    $result = $conn->query($sql);

header("location: ../paginas/excluidos.php");



?>