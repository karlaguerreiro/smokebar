<!DOCTYPE html>
<html lang="en">
<?php //Esse arquivo se refere ao Programa 1 
?>

<head>
    <title>Administrador</title>

    <?php
    //Pega as dependencias de cabeçalhos na pasta assets/header
    require_once "../assets/header.php";
    //Busca pelos styles sheets em geral (só faz a linkagem), tomar cuidado com nomes de id e class , nomes iguais recebem o mesmo tratamento.
    require_once "../assets/stylesheet.php";
    ?>

</head>



<body>


    <?php  //Arquvio de menu
    require_once "./estruturas/menu.html" ?>

    <?php //Arquivo conteudo da página dinamica

    if (isset($_GET['page'])) {

        if ($_GET['page'] == "clientes") {
            require_once "./articles/clientes.html";
        }

        if ($_GET['page'] == "estoque") {
            require_once "./articles/estoque.html";
        }

        if ($_GET['page'] == "pedidos") {
            require_once "./articles/pedidos.html";
        }
    } else {
        require_once "./articles/default.html";
    }


    ?>

    <?php // Arquivo footer
    require_once "./estruturas/footer.html"; ?>