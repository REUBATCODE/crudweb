<?php
 function menu(){
    echo "<header class='header-island'>
    <a href='menu.php'>Menu</a> 
    <a href='productos.php'>Productos</a> 
    <a href='usuarios.php'>Usuarios</a> 
    <a href='ventas.php'>Ventas</a> 
    <a href='logout.php'>Salir</a><br></header> 
    <h1>ABARROTES RUBEN</h1>";
 }
 function footer(){
    echo "<footer>All products and information are © 2001 AbarrotesRuben.com and its contributors. <a href='politicosas.php'>Privacy Policy</a></footer>";
 }

 function validarUsuario(){
   session_start();
    if(!isset($_SESSION['usuario']) && empty($_SESSION['usuario'])){
      header('location: index.php');
    }
 }
?>