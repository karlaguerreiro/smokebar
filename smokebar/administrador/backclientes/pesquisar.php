


<?php
        require "connection.php";
       

            $sql="SELECT * FROM cliente";
            $result = mysqli_query($conn,$sql);

       
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['idcliente'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['cpf'] . "</td>";
            echo "<td>" . $row['datanasc'] . "</td>";
            echo "<td>" . $row['telcli'] . "</td>";
            echo "<td>" . $row['rg'] . "</td>";
            echo "<td>"."<a href='#' onclick='popup(".$row['idcliente'].");'>Alterar</a>"."</td>";
            echo "<td>" . "<a href='?delete=".$row['idcliente']."'>Deletar" . "</a></td>";
            echo "</tr>";
        }
        
        if(isset($_GET['delete'])){
+
            $sql="delete FROM cliente where idcliente='".$_GET['delete']."'";
            $result = mysqli_query($conn,$sql);
        }

        $conn->close();

        
?>