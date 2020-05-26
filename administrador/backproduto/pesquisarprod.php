<?php
require "connection.php";


$sql = "SELECT * FROM produto";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_array($result)) 
{
    echo "<tr>";
    echo "<td>" . $row['idprod'] . "</td>";
    echo "<td>" . $row['produto'] . "</td>";
    echo "<td>" . $row['valor'] . "</td>";
    echo "<td>" . $row['descricao'] . "</td>";
    echo "<td<" . $row['venc'] . "</td>";
    echo "<td>" . "<a href='#' onclick='popup(" . $row['idprod'] . ");'>Alterar</a>" . "</td>";
    echo "<td>" . "<a href='?delete=" . $row['idprod'] . "'>Deletar" . "</a></td>";
    echo "</tr>";
}

if (isset($_GET['delete'])) {
    $sql = "delete FROM produto where idprod='" . $_GET['delete'] . "'";
    $result = mysqli_query($conn, $sql);

}

$conn->close();

