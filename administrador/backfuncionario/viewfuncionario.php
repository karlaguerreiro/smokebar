<html>


<head>
    <link rel="stylesheet" type="text/css" href="./css/dataTable.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" charset="utf8" src="../backclientes/javascript/datatable_1_10_20.js"></script>
  


</head>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });

    function popup(id) {
        window.open('./alterarfuncionario.php?id=' + id, 'Alterar Dados', 'SEARCH=NO,STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=50, LEFT=300, WIDTH=770, HEIGHT=400');
    }

    
</script>





<body>

    <form action="./registrofuncionario.php" method="get">
        <input type="submit" value="Novo Funcionário" name="novo" id="frm1_submit" />
    </form>


    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th> CPF </th>
                <th> RG </th>
                <th> DATA DE NASCIMENTO </th>
                <th> TELEFONE </th>
                <th> CEP</th>
                <th> ESTADO </th>
                <th> CIDADE</th>
                <th> RUA </th>
                <th> NÚMERO </th>
                <th>FUNÇÃO</th>
                <th>CNPJ</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody align="center">
            <?php require "pesquisarfuncionario.php" ?>

        </tbody>
        <tfoot>

        </tfoot>
    </table>

</body>