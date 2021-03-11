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

?>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <style>
            .backColor{
                color: white;
                width: 100%;
                height: 70px;
                background-color: rgb(0, 87, 157);
                padding: 10px;  
                border-bottom: solid 2px black;
            }
    
        </style>
    </head>
    <body>
        <div class="backColor">
            <div class="col-12 mb-3 ">
                <div class="float-start"><h1>INSERIR</h1></div>
                <div class="float-end">
                    <form method="post" name="cadastro" action="consulta.php">
                        <button type="submit" class="btn btn-secondary btn-lg w-100 h-100">Voltar</button>
                    </form>        
                </div> 
            </div>
        </div>
        <div class="container col-6  mt-3">
            <div class="row justify-content-center">
                <form method="post" name="insert" action="../processamentoDados/insert.php" enctype="multipart/form-data">
                    <input name="id" type="hidden" value="">
                    <label class="form-label ">Seção</label>
                    <input type="text" name="secao" class="form-control" value="<?php $secao?>">
                    <label class="form-label  ">Titulo</label>
                    <input type="text" name="titulo" class="form-control" value="<?php $titulo?>">
                    <label class="form-label ">SubTitulo</label>
                    <input type="text" name="subtitulo" class="form-control" value="<?php $subtitulo?>">
                    <label class="form-labe ">Texto</label>
                    <input type="text" name="texto" class="form-control" value="<?php $texto?>">
                    <label class="form-label ">SubText</label>
                    <input type="text" name="subtexto" class="form-control" value="<?php $subtexto?>">
                    <label class="form-labe ">ItensLista</label>
                    <input type="text" name="itenslista" class="form-control" value="<?php $itenslista?>">
                    <label class="form-labe ">Tipo</label>
                    <input type="text" name="tipo" class="form-control" value="<?php $tipo?>">
                    <label class="mt-3" for="imagem">Imagem:</label><input class="form-control" type="file" name="imagem"/><br/>
                    <button type='submit' class='mt-2 btn btn-primary'>Confirmar</button>
                </form>
            </div>
        </div>
    </body>
</html>