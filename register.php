<?php
require_once('db.php');
$email= $_POST['email'];
$pass= $_POST['pass'];
$repass= $_POST['repass'];

if(empty($email) || empty($pass) || empty($repass)){
    echo "Заполните все поля";
}else{
    if($pass != $repass){
        echo "Пароли не совпадают";
    } else{
        $sql = "INSERT INTO `users` (email,pass) VALUES ('$email','$pass')";
        if($conn -> query($sql) === TRUE){
            echo "Успешная регистрация";
        }else{
            echo "Ошибка: " . $conn->error;
        }
    }
}

