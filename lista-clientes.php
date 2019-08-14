<?php
	include "conexao.php";
	$sql = "SELECT * FROM cliente";
	$clientes = $conn->query($sql);

	$conn->close();
?>
<html>
    <head>
        <title>Lista Clientes</title>
    </head>
    <body>
    <?php
        if ($clientes->num_rows > 0) { // verificando se há clientes
            // $clientes->fetch_assoc() -> transformar dados em matriz
            while($row = $clientes->fetch_assoc()) {
                echo $row['nome'];
                echo " - ";
                echo $row['email'];
                echo "<br/>";
            }
        } 
	?>	
    </body>
</html>