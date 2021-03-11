<?php 
session_start();

if($_SESSION["matricula"] == "") {
    header("location: ../index.php?msg=negado");
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
            <div class="float-start"><h1>CONSULTA</h1></div>
            <div class="float-end">
                <form method="post" name="cadastro" action="consulta.php">
                    <button type="submit" class="btn btn-secondary btn-lg w-100 h-100">Voltar</button>
                </form>        
            </div> 
        </div>
        </div>
        <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Secao</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">SubTitulo</th>
                    <th scope="col">Texto</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "site_weg";

                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM weg WHERE Status='0' ORDER BY ID ASC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>".
                                    "<th scope='row'>". $row["ID"] . "</th>".
                                    "<td>". $row["Secao"] . "</td>".  
                                    "<td>". $row["Titulo"] . "</td>". 
                                    "<td>". $row["SubTitulo"] . "</td>".
                                    "<td>". $row["Texto"] . "</td>".    
                                    "<td> <a href=../processamentoDados/roolback.php?ID=".$row["ID"]."><img src='../img/back.png' width='16px' height='16px'>" .
                                    "</td>". 
                                "</tr>";
                        }
                    } else {
                    echo "Sem registro";
                    }
                    $conn->close();
            ?> 
            </tbody>
        </table>
    </body>
</html>