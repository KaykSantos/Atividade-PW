<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar senha</title>
</head>
<body>
    <a href="../home">Voltar</a> <br><br>
    <fieldset>
        <legend>Cadastro de cliente</legend>
        <form action="../php/reset_password.php" method="post">
            <input type="password" name="old_password" id="old_password" placeholder="Senha antiga:"> 
            <img src="../assets/imgs/eye.png" alt="Icone de oho - ver senha" id="btn-eye1">
            <br><br>
            <input type="password" name="new_password" id="new_password" placeholder="Nova senha:">
            <img src="../assets/imgs/eye.png" alt="Icone de oho - ver senha" id="btn-eye2">
            <br><br>
            <input type="password" name="repeat_new_password" id="repeat_new_password" placeholder="Repita a nova senha:">
            <img src="../assets/imgs/eye.png" alt="Icone de oho - ver senha" id="btn-eye3">
            <br><br>
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