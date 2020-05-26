<?php

include './backclientes/connection.php';


 
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
   

if (isset($_POST['Logar'])){
$query = 'SELECT *FROM usuario where user = "'.$user.'" and pass= "'.$pass.'" limit 1';

$res = mysqli_query($conn,$query);
$linhas = mysqli_num_rows($res);


  if($linhas){
    //Tratamento de login
    session_start();
    $usuario = mysqli_fetch_assoc($res);
    $_SESSION['userid'] = $usuario['idusuario'];
    $user_id = $_SESSION['userid'];
    
    $query = 'SELECT idfuncao FROM funcionario WHERE idusuario = '.$user_id.' limit 1';
    $res = mysqli_query($conn,$query);
    $linhas = mysqli_num_rows($res);
    
    if($linhas){ //0 = falso n > 0 = true
      //Deu certo
      $funcionario = mysqli_fetch_assoc($res);
      $_SESSION['userlevel'] = $funcionario['idfuncao'];
      $_SESSION['userid'] = $usuario['idusuario'];
      echo "Dados salvos em sessão";

    }else{
      //Tratamento de erro
    }


    
  }
  else{
    //Tratamento de Erro

    echo "Erro usuario ou senhas incorretas";

  }





}