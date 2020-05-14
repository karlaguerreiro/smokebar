<head>
    <title>Alterar dados do Usuario</title>




</head>

<body onunload="window.opener.location.reload()">


    <?php
    require_once "connection.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM cliente where idcliente='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    }


    ?>



    <form action='./alterar.php' method="POST">
        Nome: <input type="text" name="nome" value="<?php echo $row['nome'] ?>"></input></br>
        CPF: <input type="text" name="cpf" value="<?php echo $row['cpf'] ?>"></input></br>
        DATA NASCIMENTO: <input type="text" name="datanasc" value="<?php echo $row['datanasc'] ?>"></input></br>
        TELEFONE: <input type="text" name="telcli" value="<?php echo $row['telcli'] ?>"></input></br>
        RG: <input type="text" name="rg" value="<?php echo $row['rg'] ?>"></input></br>

        <input type="text" name="id" value="<?php echo $row['idcliente'] ?>"></input>
        <input type="submit" name="submit" value="Alterar Dados"></input></br>
    </form>



    <?php


    if (isset($_POST['submit'])) {
        echo "Clicou";
        $id = $_POST['id'];
        $sql = "UPDATE cliente SET nome= '" . $_POST['nome'] . "',
                             cpf = '" . $_POST['cpf'] . "',
                             datanasc= '" . $_POST['datanasc'] . "',
                             telcli= '" . $_POST['telcli'] . "',
                             rg= '" . $_POST['rg'] . "' 
                             
                             WHERE idcliente='$id'";


        $result = mysqli_query($conn, $sql);




        echo "<script>window.open('', '_self', '');window.close();</script>";
    }

    ?>

</body>