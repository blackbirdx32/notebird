<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="..\css\style.css">
        <title>ALTERAÇÃO - TOPICO</title>
    </head>
    <body>
        <section class="blocoInserir">
            <?php
                $id = $_POST['id'];
                $titulo = $_POST['titulo'];
                $imagem = $_POST['imagem'];
                $texto = $_POST['texto'];
                $nota_id = $_POST['nota_id'];

                $con = mysqli_connect('127.0.0.1','root','','notebird');
                $sql = "UPDATE topico set titulo='$titulo',imagem='$imagem',texto='$texto','nota_id'='$nota_id' WHERE id='$id'";

                mysqli_query($con,$sql);
                mysqli_close($con);
                echo "Cadastrado";
            ?>
        </section>    

        <div class="botao">
            <a href="..\index.php"><img src="..\imagens\boc.jpg" ></a>
        </div>
        
    </body>
</html>