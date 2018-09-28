<?php
@session_start();

if(!isset($_SESSION['login'])){

  exit ("Você precisa fazer o login para ver está página!");
}

 ?>
