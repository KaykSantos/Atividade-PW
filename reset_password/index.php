<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar senha</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="../home" id="a-back">Voltar</a> 
    <fieldset>
        <legend>Cadastro de cliente</legend>
        <form action="../php/reset_password.php" method="post">
            <label for="old_password">Senha antiga</label>
            <input type="password" name="old_password" id="old_password"> 
            <img src="../assets/imgs/eye.png" alt="Icone de oho - ver senha" id="btn-eye1">
            <label for="new_password">Nova senha:</label>
            <input type="password" name="new_password" id="new_password">
            <img src="../assets/imgs/eye.png" alt="Icone de oho - ver senha" id="btn-eye2">
            <label for="repeat_new_password">Repita a nova senha</label>
            <input type="password" name="repeat_new_password" id="repeat_new_password">
            <img src="../assets/imgs/eye.png" alt="Icone de oho - ver senha" id="btn-eye3">
            <button type="submit" name="submit">Cadastrar</button>
        </form>        
    </fieldset>
    <script>
        let btn1 = document.getElementById('btn-eye1');
        btn1.addEventListener('click', function(){
            let input1 = document.getElementById('old_password');

            if(input1.getAttribute('type') == 'password') {
                input1.setAttribute('type', 'text');
            }else {
                input1.setAttribute('type', 'password');
            }

        });
        
        let btn2 = document.getElementById('btn-eye2');
        btn2.addEventListener('click', function(){
            let input2 = document.getElementById('new_password');

            if(input2.getAttribute('type') == 'password') {
                input2.setAttribute('type', 'text');
            }else {
                input2.setAttribute('type', 'password');
            }

        });

        let btn3 = document.getElementById('btn-eye3');
        btn3.addEventListener('click', function(){
            let input3 = document.getElementById('repeat_new_password');

            if(input3.getAttribute('type') == 'password') {
                input3.setAttribute('type', 'text');
            }else {
                input3.setAttribute('type', 'password');
            }

        });
    </script>
</body>
</html>