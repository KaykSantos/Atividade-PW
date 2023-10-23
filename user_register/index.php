<?php
    require '../php/autoload.php';
    if(!VerifyNivel($_SESSION['nivel'], NIVEL_ADM)){
        header('Location: ../');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <a href="../home">Voltar</a> <br><br>
    <fieldset>
        <legend>Cadastro de usuário</legend>
        <form action="../php/user_register.php" method="post">
            <input type="text" name="login" id="login" placeholder="Login:">
            <br><br>
            <input type="text" name="name" id="name" placeholder="Nome:">
            <br><br>
            <input type="email" name="email" id="email" placeholder="Email:">
            <br><br>
            <input type="password" name="password" id="password" placeholder="Senha:">
            <br><br>
            <select name="nivel" id="nivel">
                <option value="3">Nível de usuário</option>
                <option value="1">Nível 1</option>
                <option value="2">Nível 2</option>
            </select>
            <br><br>
            <button type="submit" name="submit">Cadastrar</button>
        </form>        
    </fieldset>
    <fieldset>
        <?php
            
            $sql = "SELECT * FROM usuario";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                foreach($stmt as $row){
                    echo "Id: ".$row['id']."<br>Login: ".$row['login']."<br>Nome: ".$row['name']."<br>Email: ".$row['email']."<br>Nível: ".$row['nivel']."<br><br>";
                }
            }else{
                echo "<h2>Não há clientes cadastrados</h2>";
            }
        ?>
    </fieldset>
</body>
</html>