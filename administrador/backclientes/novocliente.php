<html>



<body>

    <form method="post" action="">

    <fieldset >

    <legend> Dados do Cliente</legend>
    <table cellspacing ="10">
    <tr>
                <td>
                    <label for="nome">Nome: </label>
                </td>
                <td align="left">
                    <input type="text" name="nomecli">
                </td>
              
          
        </tr>

        <tr>
                <td>
                    <label>Data de nascimento: </label>
                </td>
                <td align="left">
                <input type="date" name="datanasc"  maxlength="13">
                </td>

        <tr>
                <td>
                    <label for="rg">RG: </label>
                </td>
                <td align="left">
                    <input type="text" name="rg" size="13" maxlength="13">
                </td>

       <tr>
                <td>
                    <label>CPF:</label>
                </td>
                <td align="left">
                    <input type="text" name="cpf" size="9" maxlength="11">
                </td>
            </tr>

            <tr>
                <td>
                    <label>TELEFONE:</label>
                </td>
                <td align="left">
                    <input type="text" name="telefone" size="8" maxlength="11">
                    <input type="submit" class="enviar" name ="enviar"  value="enviar">
                </td>
            </tr>

      

  </table>
  </fieldset>
   

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
        header("Location:./view_pesquisar.php");
    } else {
        echo "Erro:" . mysqli_error($conn);
    }

}

$conn->close();

}

?>
