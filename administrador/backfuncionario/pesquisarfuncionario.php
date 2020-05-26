<?php

require "../backclientes/connection.php";

if (isset ($_GET ['delete']))
{
    $sql= "delete FROM  funcionario where idfuncionario ". $_GET['delete'];

    $result = mysqli_query($conn, $sql);
    }

    $sql = "SELECT*FROM funcionario";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)){

        echo "<tr>";
        echo "<td>" . $row['idfuncionario'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['cpf'] . "</td>";
        echo "<td>" .$row ['rg'] . "</td>";
        echo "<td>" . $row['datanasc'] . "</td>";
        echo "<td>" . $row['telefone'] . "</td>";
        echo "<td>" . $row['cep'] . "</td>";
        echo "<td>" . $row['estado'] . "</td>";
        echo "<td>" . $row['cidade'] . "</td>";
        echo "<td>" . $row['rua'] . "</td>";
        echo "<td>" . $row ['numero'] . "</td>";
         echo "<td>" . $row ['idfuncao'] . "</td>";
        echo "<td>" . $row ['cnpj'] . "</td>";
        echo"<td> ". "<a href='#' onclick='popup(" . $row['idfuncionario'] . ");'>Alterar</a>" . "</td>";
        echo "<td>" . "<a href='?delete=" . $row['idfuncionario'] . "'>Deletar" . "</a></td>";
        echo "</tr>";

}