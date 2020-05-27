<?php


include 'connection.php';

session_start();




 if($_SESSION['userlevel'] == 1){
    //Redireciona para pagina da id da função
    //REDIRECIONE PARA PAGINA DO CLIENTE
    header("Location:../defaut.html");
 }



