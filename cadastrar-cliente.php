<?php
    include "conexao.php";
    
        $nomeCliente = $_POST['nome'];
        $emailCliente = $_POST['email'];
    
		$sql = "INSERT INTO cliente VALUES 
            (default,'{$nomeCliente}','{$emailCliente}')";
		
		if ($conn->query($sql) === TRUE) {
			echo "Cadastrado com sucesso";
		} else {
			echo "Error: " . $conn->error;
		}

	
	$conn->close();
?>