<?php
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$connect = mysql_connect('database_teste','rod33oliver','0616');
$db = mysql_select_db('database_teste');
  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM usuarios WHERE login =
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:index.php");
      }
  }
?>