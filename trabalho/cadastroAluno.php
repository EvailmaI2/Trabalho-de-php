<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">    
    <title>Cadastro de Aluno</title>   
</head>
<body background="escola.jpg">
    <?php include_once('index.html');  ?>
    <center>
    	<h1>CADASTRE-SE AQUI</h1> 
    <form action="salvar.php" method="POST">
        Número:<input type="text" name="n" size="1"><br>
        Nome:<input type="text" name="nome" id="nome" size="2" ><br>
        sexo: <input type="radio" name="sexo" value="M">M <input type="radio" name="sexo" value="F">F<br>
        <input type="submit" value="Salvar">
    </form>
</center>
</body>
</html>