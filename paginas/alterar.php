<html>
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

if (isset($_GET["ID"])){

    $ID = $_GET["ID"];
}

$sql = "SELECT * FROM weg WHERE $ID = id ORDER BY ID ASC";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $secao = $row["Secao"];
        $titlle = $row["Titulo"];
        $subtitulo = $row["SubTitulo"];
        $texto = $row["Texto"];
        $subtexto = $row["SubTexto"];
        $itenslista = $row["ItensLista"];
        $img = $row["Img"];
        $tipo = $row["Tipo"];
    }
}
?>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1' crossorigin='anonymous'>
    <style>
        .backColor{
            color: white;
            background-color: rgb(0, 87, 157);
            padding: 10px;  
            border-bottom: solid 2px black;
        }
    </style>
</head>
<body>
    <div class='col-12 mb-3 backColor '><h1>UPDATE</h1></div>
    <div class="container">
        <div class="row">
            <form method="post" name="cadastro" action="../processamentoDados/update.php" enctype="multipart/form-data">
            
            <input name="id" type="hidden" value="<?php echo $ID ?>">
            <label class="form-label col-sm-12 col-lg-6">Seção</label>
            <input type="text" name="secao" class="form-control" value="<?php echo $secao; ?>">
            <label class="form-label col-sm-12 col-lg-6">Titulo</label>
            <input type="text" name="titulo" class="form-control" value="<?php echo $titlle; ?>">
            <label class="form-label col-sm-12 col-lg-6">SubTitulo</label>
            <input type="text" name="subtitulo" class="form-control" value="<?php echo $subtitulo; ?>">
            <label class="form-label col-sm-12 col-lg-6">Texto</label>
            <input type="text" name="texto" class="form-control" value="<?php echo $texto; ?>">
            <label class="form-label col-sm-12 col-lg-6">SubText</label>
            <input type="text" name="subtexto" class="form-control" value="<?php echo $subtexto; ?>">
            <label class="form-label col-sm-12 col-lg-6">ItensLista</label>
            <input type="text" name="itenslista" class="form-control" value="<?php echo $itenslista; ?>">
            <label class="form-label col-sm-12 col-lg-6">Img</label>
            <input type="text" name="imagem" class="form-control" value="<?php echo $img; ?>">
            <label class="form-label col-sm-12 col-lg-6">Tipo</label>
            <input type="text" name="tipo" class="form-control" value="<?php echo $tipo; ?>">
            <label class="mt-3" for="imagem">Imagem:</label><input class="form-control" type="file" name="imagem"/><br/>

            <button type='submit' class='mt-2 btn btn-primary'>Confirmar</button>
            </form> 
        </div>
    </div>
        
</body>

