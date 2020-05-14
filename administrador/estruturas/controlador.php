<?php

if (isset($_GET['page'])) {

    if ($_GET['page'] == "clientes") {
        require_once "./articles/clientes.php";
    }

    if ($_GET['page'] == "estoque") {
        require_once "./articles/produto.php";
    }

    if ($_GET['page'] == "pedidos") {
        require_once "./articles/pedidos.html";
    }
} else {
    require_once "./articles/default.html";
}
