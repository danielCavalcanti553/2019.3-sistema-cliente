<?php
    include "conexao.php";
    $id = $_GET['idcliente'];
    $sql = "SELECT * FROM cliente WHERE id={$id}";
	$cliente = $conn->query($sql);
    //print_r($cliente->fetch_assoc());  
    $dados = $cliente->fetch_assoc();
    //echo $dados['email'];
	$conn->close();
?>

<html>
    <head>
        <title>Edita CLiente</title>
</head>
<body>
    <h1>Edita Cliente</h1>
    <form method="post" action="atualizar-cliente.php" >
        <label>Nome</label>
        <input type="text" name="nome" size="15" 
            value="<?php echo $dados['nome'];?>" /> 
        <br/>

        <label>E-mail</label>
        <input type="text" name="email" size="15"  
            value="<?php echo $dados['email'];?>" />
        <br/>
        <input type="submit" value="Atualizar" />
    </form>
</body>
</html>

