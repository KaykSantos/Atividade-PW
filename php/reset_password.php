<?php

require 'autoload.php';

if($_POST){
    if(empty($_POST['old_password']) || empty($_POST['new_password']) || empty($_POST['repeat_new_password'])){
        echo "Preencha todos os campos!<br><br><a href='../reset_password'>Voltar</a>";
    }else{
        $old_pass = $_POST['old_password'];
        $new_pass = $_POST['new_password'];
        $rep_new_pass = $_POST['repeat_new_password']; 

        if($new_pass === $rep_new_pass){
            $sql = "SELECT * FROM usuario WHERE login = :login";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':login', $_SESSION['login']);
            if($stmt->execute()){
                $sql = "UPDATE usuario SET password = :password WHERE login = :login";

                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':password', $new_pass);
                $stmt->bindParam(':login', $_SESSION['login']);
                if($stmt->execute()){
                    echo "Alteração de senha realizada com sucesso!<br><br><a href='../reset_password'>Voltar</a>";    
                }
            }else{
                echo "Erro!<br><br><a href='../reset_password'>Voltar</a>";    
            }
        }else{
            echo "As senhas digitadas são diferentes! Tente digita-las novamente.<br><br><a href='../reset_password'>Voltar</a>";
        }
    }
}