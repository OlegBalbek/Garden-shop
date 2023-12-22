<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $login = $_POST['login'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

   echo "Регистрация успешна";
} else {
  
}
?>