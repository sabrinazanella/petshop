<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consultar PET por nome:</title>
    </head>
    <body>
        <?php
            if(empty($_POST)){
                include 'form.inc';
            }
            else{
                $nomepet = $_POST["nomepet"];
                include('cabecalho_conexao.php');

                $SQL = "SELECT * FROM animais WHERE nomepet= '$nomepet'";

                $dados_recuperados = mysqli_query($con, $SQL);

                if(mysqli_num_rows($dados_recuperados) > 0){
                    
                    while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
                        
                        echo $resultado[0] . " - " . $resultado[1] . " - " . $resultado[2] . "<br>";
                        echo '<a href="menu.php">Voltar</a>';
                    }		
                }
                else{
                    echo "Digite outro nome. PET não cadastrado.";
                }

                mysqli_close($con);
            }
            
        ?>
    </body>
</html>