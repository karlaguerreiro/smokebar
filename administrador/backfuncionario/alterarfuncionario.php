<head>
    <title>Alterar dados do Funcionário</title>




</head>

<body onunload="window.opener.location.reload()">


    <?php
    require_once  "../backclientes/connection.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM funcionario where idfuncionario='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    }


    ?>



    <form action='./alterarfuncionario.php' method="POST">
        Nome: <input type="text" name="nome" value="<?php echo $row['nome'] ?>"></input></br>
        RG: <input type="text" name="rg" value="<?php echo $row['rg'] ?>"></input></br>
        CPF: <input type="text" name="cpf" value="<?php echo $row['cpf'] ?>"></input></br>
        Data de nascimento: <input type="text" name="datanasc" value="<?php echo $row['datanasc'] ?>"></input></br>
        Telefone: <input type="text" name="telefone" value="<?php echo $row['telefone'] ?>"></input></br>
        Estado: <input type="text" name="estado" value="<?php echo $row['estado'] ?>"></input></br>
        Cidade: <input type="text" name="cidade" value="<?php echo $row['cidade'] ?>"></input></br>
        Rua: <input type="text" name="rua" value="<?php echo $row['rua'] ?>"></input></br>
        Número: <input type="text" name="numero" value="<?php echo $row['numero'] ?>"></input></br>
        CEP: <input type="text" name="cep" value="<?php echo $row['cep'] ?>"></input></br>

        <input type="text" name="id" value="<?php echo $row['idfuncionario'] ?>"></input>
        <input type="submit" name="submit" value="Alterar Dados"></input></br>
    </form>



    <?php


    if (isset($_POST['submit'])) {
        echo "Clicou";
        $id = $_POST['id'];
        $sql = "UPDATE funcionario SET nome= '" . $_POST['nome'] . "',
                             rg= '" . $_POST['rg'] . "',
                             cpf = '" . $_POST['cpf'] . "',
                             datanasc= '" . $_POST['datanasc'] . "',
                             telefone= '" . $_POST['telefone'] . "',
                             estado= '" . $_POST['estado'] . "',
                             cidade = '" . $_POST['cidade'] . "',
                             rua= '" . $_POST['rua '] . "',
                             numero= '" . $_POST ['numero'] . "',
                             cep= '" . $_POST['cep'] . "' 
                     
                             
                             WHERE idfuncionario='$id'";


        $result = mysqli_query($conn, $sql);




        echo "<script>window.open('', '_self', '');window.close();</script>";
    }

    ?>

</body>