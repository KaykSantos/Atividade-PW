<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <fieldset>
        <legend>Login</legend>
        <form action="../php/login.php" method="post">
            <label for="login">Login</label>
            <input type="text" name="login" id="login">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" >
            <button type="submit" name="submit">Entrar</button>
        </form>        
    </fieldset>
</body>
</html>