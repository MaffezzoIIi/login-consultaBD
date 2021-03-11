<html lang="pt-br">
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

     $sql = "SELECT * FROM weg WHERE Status='1' ORDER BY ID ASC";
     $result = $conn->query($sql);

?>
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
            .teste {
                float: right;   
                margin-right: 10px;
            }
        </style>
    </head>   
    <body>
        <div class="backColor">
        <div class="col-12 mb-3 ">
            <div class="float-start"><h1>CONSULTA</h1></div>  
            <div class="col-1 float-end ml-3">
                <form method="post" name="cadastro" action="excluidos.php">
                    <button type="submit" class="btn btn-secondary btn-lg w-100 h-100">Excluidos</button>
                </form>        
            </div>  
            <div class=" teste">
                <form method="post" name="cadastro" action="inserir.php">
                    <button type="submit" class="btn btn-secondary btn-light btn-lg w-100 h-100">Adicionar</button>
                </form>        
            </div> 
        </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <div class="col-10 ">
                <table class="mt-3  table table-bordered shadow-sm p-3 mb-5 bg-white rounded text-center ">
                    <thead class=" ">
                        <tr class="table-info">
                            <th scope="col">ID</th>
                            <th scope="col ">Secao</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                       
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>".
                                            "<th scope='row'>". $row["ID"] . "</th>".
                                            "<td>". $row["Secao"] . "</td>".  
                                            "<td>". $row["Titulo"] . "</td>". 
                                            "<td>". $row["Tipo"] . "</td>".
                                            "<td> <a href=../processamentoDados/del.php?ID=".$row["ID"]."><img src='../img/trash.png' width='16px' height='16px'>" .
                                            "</a>|<a href=alterar.php?ID=". $row["ID"] ."><img src='../img/lapis.png' width='16px' height='16px'></a> </td>". 
                                        "</tr>";
                                }
                            } else {
                            echo "Sem registro";
                            }
                            $conn->close();
                    ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>