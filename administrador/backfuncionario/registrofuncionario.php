<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Funcionário</title>


  
    </head>
</head>

<body>


    
<form action="" method="POST" autocomplete="on" >

    <fieldset>
        <legend>Dados do funcionário</legend>
        <table cellspacing="10">

            <tr>
                    <td>
                        <label for="funcao">Função  </label>
                    </td>

                    <td align="left">
                    <select name="idfuncao">
                            <option value="1">Gerente </option>
                            <option value="2">Atendimento </option>
                    </select>
                        
                    </td>
                </tr>


            <tr>
                <td>
                    <label for="cnpj">CNPJ: </label>
                </td>
                <td align="left">
                    <input type="number" size="11" maxlength="11" name="cnpj" required>
                    
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nome">Nome: </label>
                </td>
                <td align="left">
                    <input type="text" name="nome" required>
                </td>
              
          
            </tr>
            <tr>
                <td>
                    <label>Data de nascimento: </label>
                </td>
                <td align="left">
                <input type="date" name="datanasc"  maxlength="13">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="rg">RG: </label>
                </td>
                <td align="left">
                    <input type="text" name="rg" size="13" maxlength="13" required>
                </td>
            </tr>

            <br>
            
            <tr>
                <td>
                    <label>CPF:</label>
                </td>
                <td align="left">
                    <input type="number" name="cpf" size="9" maxlength="11" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Telefone:</label>
                </td>
                <td align="left">
                    <input type="number" name="telefone" size="8" maxlength="11" required>
                </td>
            </tr>

            </table>
 
            </fieldset>


            <br>

            <fieldset>
            <legend>Endereço do funcionário</legend>
             <table cellspacing="10">
            
            <tr>
                <td>
                    <label for="cep">CEP:
                </td>
                <td align="left">
                <input name="cep" type="number" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);" /></label>
                
                </td>
            </tr>
            
         

            <tr>
                <td>
                    <label for="estado">Estado:</label>
                </td>
                <td align="left">
            <select name ="estado" id="estado">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
		</select>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="cidade">Cidade: </label>
                </td>
                <td align="left">
                    <input type="text" id ="cidade" name="cidade" size="45" required>
                    
                </td>
            </tr>

            <tr>
                <td>
                    <label for="bairro">Bairro: </label>
                </td>
                <td align="left">
                    <input id="bairro" type="text" name="bairro" size ="45" required>
                    
                </td>
            </tr>


            <tr>
                <td>
                    <label for="rua">Rua:</label>
                </td>
                <td align="left">
        <input name="rua" type="text" id="rua" size="45" required/>
                </td>
           </tr>

            <tr>
                <td>
                    <label for="numero">Numero:</label>
                </td>
                <td align="left">
                    <input type="number" id=" numero" name="numero" size="4">
                </td>
            </tr>
            <tr>



    
            

    </table>
 
    </fieldset>


    <br>


    <fieldset>
        <legend>Dados de login</legend>
        <table cellspacing="10">
            <tr>
                <td>
                    <label for="nome">Nome do Funcionario: </label>
                </td>
                <td align="left">
                    <input type="text" name="nomef" required >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="login">Login de usuário: </label>
                </td>
                <td align="left">
                    <input type="text" name="user" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pass">Senha: </label>
                </td>
                <td align="left">
                    <input type="password" name="pass" required>
                </td>
            </tr>
         
        </table>
    </fieldset>
    <input type="submit" class="enviar" name ="enviar"  value="enviar">
    </form>

 </body>

  </html>
   

  
<?php 

if (isset($_POST["enviar"]))
{


require "../backclientes/connection.php";

$nome = mysqli_real_escape_string( $conn, $_POST["nome"]);
$datanasc =mysqli_real_escape_string( $conn, $_POST["datanasc"]);
$rg = mysqli_real_escape_string( $conn,$_POST["rg"]);
$cpf =mysqli_real_escape_string( $conn, $_POST["cpf"]);
$telefone =mysqli_real_escape_string( $conn, $_POST["telefone"]);
$estado =mysqli_real_escape_string( $conn, $_POST ["estado"]);
$cidade =mysqli_real_escape_string( $conn, $_POST ["cidade"]);
$rua =mysqli_real_escape_string( $conn, $_POST ["rua"]);
$numero =mysqli_real_escape_string( $conn, $_POST ["numero"]);
$cep = mysqli_real_escape_string( $conn,$_POST["cep"]);
$cnpj = mysqli_real_escape_string( $conn,$_POST ["cnpj"]);
$idfuncao =mysqli_real_escape_string( $conn, $_POST ["idfuncao"]);

$nomef =mysqli_real_escape_string( $conn, $_POST ["nomef"]);
$user= mysqli_real_escape_string( $conn, $_POST["user"]);
$pass= mysqli_real_escape_string( $conn, $_POST["pass"]);


if (mysqli_connect_errno($conn)) {
    echo "Erro: " . mysqli_connect_error();
} else {
    $sql = "INSERT INTO funcionario ( nome , datanasc , rg ,  telefone, cpf,  estado, cidade, rua,  numero , cep, cnpj , idfuncao)
    VALUES ( '$nome', '$datanasc' , '$rg'  , '$telefone' , '$cpf',  '$estado' , '$cidade', '$rua' ,  '$numero' ,  '$cep'  , '$cnpj' , '$idfuncao' )";

    
if (mysqli_query($conn, $sql))
{
 $last_id = mysqli_insert_id($conn);
 echo "Funcinário  inserido!";

} else {
 echo "Erro:" . mysqli_error($conn);
}



    $sql = "INSERT INTO usuario ( nomef , user , pass )
    VALUES ('$nomef' , '$user' , '$pass')";

    if (mysqli_query($conn, $sql))
       {
        echo "Usuário inserido";
       
    } else {
        echo "Erro:" . mysqli_error($conn);
    }



}

$conn->close();

}

?>
