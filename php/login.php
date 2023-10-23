<?php

require 'autoload.php';

if($_POST){
    if(empty($_POST['login']) || empty($_POST['password'])){
        echo "Preencha todos os campos!<br><br><a href='../'>Voltar</a>";
    }else{
        $login = $_POST['login'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuario WHERE login = :login AND password = :password";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam('password', $password);
      
        if($stmt->execute()){  
            if($stmt->rowCount() > 0){ 
                $fields = $stmt->fetch(PDO::FETCH_ASSOC);

                $_SESSION['name'] = $fields['name'];
                $_SESSION['nivel'] = $fields['nivel'];                     
                $_SESSION['login'] = $login;           
                $_SESSION['login-effect'] = true;
                header('Location: ../home');
            }else{
                echo "Login e/ou senha inválidos! Tente novamente.<br><br><a href='../'>Voltar</a>";
            }
        }
    }
}