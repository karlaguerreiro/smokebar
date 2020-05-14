<html>

<body>
    <form method="post" action="">


        Nome: <input type=text name="nome" value="Insira o nome do cliente "> <br>
        Data de nascimento: <input type=date name="datanasc" value="aaaa/mm/dd"><br>
        Rg: <input type=text name="rg" value="Insira o RG do cliente"><br>
        CPF: <input type="number" name="cpf" value="Insira somente números"><br>
        Telefone: <input type="number" name="telcli" value="Insira somente números"><br>
        <input type="submit" name ="enviar" value="Enviar">
        <input type="submit"  value="Voltar">
    </form>
</body>

</html>

<?php

if (isset($_POST["enviar"]))
{


require "connection.php";

@$nome = $_POST["nome"];
@$datanasc = $_POST["datanasc"];
@$rg = $_POST["rg"];
@$cpf = $_POST["cpf"];
@$telcli = $_POST["telcli"];

if (mysqli_connect_errno($conn)) {
    echo "Erro: " . mysqli_connect_error();
} else {
    $sql = "INSERT INTO cliente ( nome , datanasc , rg , cpf, telcli)
    VALUES ( '$nome', '$datanasc' , '$rg' , '$cpf' , '$telcli')";

    if (mysqli_query($conn, $sql))
       {
        echo "Cliente inserido!";
    } else {
        echo "Erro:" . mysqli_error($conn);
    }

}

$conn->close();

}

?>
