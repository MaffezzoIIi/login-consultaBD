<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .backColor{
            color: white;
            background-color: rgb(0, 87, 157);
            height: 50px;
            padding-top: 10px;
            text-align: center;
        }
    </style>
</head>
<?php

session_start();
$_SESSION["matricula"] = "" ;

$matricula="";
$valida="";

 if(isset($_GET["msg"])) {
    if($_GET["msg"] == "sucesso"){
        echo "
            <script>
                alert('Login realizado com sucesso');
            </script>
        ";

        $valida="certo";
    } else if ($_GET["msg"] == "falhaacesso"){
        echo "
        <script>
            alert('Erro de usuário ou senha');

        </script>
        <style>
                #senha {
                    border: 2px solid red;
                }
            </style>
        ";

         $valida="erro";
    }
    if($_GET["msg"] == "negado"){
        echo "
        <script>
            alert('Acesso negado!');

        </script>
        ";
    }
 }

 if(isset($_GET["matricula"])) {
    $matricula = $_GET["matricula"];
 }
?>



<body>
    <div class="col-12 backColor ">LOGIN - EDITOR</div>
    <div style="text-align: center;"><img src="download.png" alt="" class="mb-4"> </div>
    <div class="col-lg-6 col-sm-12 position-relative mt-5 p-3 start-50 translate-middle">
        <form  method="post" name="login" action="processamentoDados/login.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label col-sm-12 col-lg-6">Matricula</label>
                <input type="text" name="matricula"class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp" placeholder="Matricula Cracha">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label justify-content-center" >Senha</label>
            <input type="password" id="senha" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Nunca compartilhe sua senha com ninguém">
            </div>
            <button type="submit" class="btn btn-primary formSubmit">Enviar</button>
        </form>
    </div>
</body>
</html>