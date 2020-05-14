<html>


<head>
    <link rel="stylesheet" type="text/css" href="./css/dataTable.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" charset="utf8" src="./javascript/datatable_1_10_20.js"></script>


</head>



<body>


    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Vencimento</th>
                <th>Quantidade</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody align="center">
            <?php require "./pesquisarprod.php" ?>

        </tbody>

    </table>

</body>

</html>