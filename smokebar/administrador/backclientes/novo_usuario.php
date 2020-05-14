<?php 

require "connection.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data_nasc = $_POST['datanasc'];
$telcli = $_POST['tel'];
$rg = $_POST['rg'];

$sql = "INSERT INTO cliente VALUES('$nome','0','$cpf','$data_nasc',$telcli,$rg)";


$result = $conn->query($sql);

if ( $result ) {
    $last_id = $conn->insert_id;
    echo json_encode($last_id);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>