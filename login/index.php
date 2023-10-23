<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <fieldset>
        <legend>Login</legend>
        <form action="../php/login.php" method="post">
            <input type="text" name="login" id="login" placeholder="Login:">
            <br><br>
            <input type="password" name="password" id="password" placeholder="Senha:">
            <br><br>
            <button type="submit" name="submit">Entrar</button>
        </form>        
    </fieldset>
</body>
</html>