<?php
    require '../php/autoload.php';

    VerifyLogin();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <section> <!-- Menu lateral obrigatório da atividade -->
        <h3>Menu</h3>
        <a href="../reset_password/">Alterar senha</a> <br> <br>
        <a href="../user_register/">Cadastro de usuários</a> <br> <br>
        <?php 
            if(VerifyNivel($_SESSION['nivel'], NIVEL_ADM)){
                echo '<a href="../client_register/">Cadastro de clientes</a> <br> <br>';
            }
        ?>
        <a href="../product_register/">Cadastro de produtos</a> <br> <br>
        <a href="../exit/">Sair</a>
    </section>
    <section> <!-- Resto do conteúdo do site -->
        <h1>Conteúdo</h1>
    </section>
</body>
</html>