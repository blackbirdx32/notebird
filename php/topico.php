<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="..\css\style.css">
        <title>NOTEBIRD - Topico</title>
    </head>
    <body>
        <?php
            $id = $_POST['id'];

            $con = mysqli_connect('127.0.0.1','root','','notebird');
            $sql = "SELECT * FROM topico WHERE id='$id'";
            $result = mysqli_query($con,$sql);

            while($row = mysqli_fetch_array($result)){
        ?>
        <section class="bloco">
            <div class="imagemNota">
                <img src="..\imagens\<?php echo $row['imagem'];?>">
            </div>

            <div class="textoNota">
                <h1><?php echo $row['titulo'];?></h1>
                <p class="justificado"><?php echo $row['texto'];?></p>
                <form method="POST" action="alterarTopicoForm.php">
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    <input type="submit" value="Alterar">
                </form>
                <form method="POST" action="deletarTopico.php">
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    <input class="vermelho" type="submit" value="Excluir">
                </form>
            </div>

            <div class="linha"></div>
        </section>
        <?php
            }
            mysqli_close($con);
        ?>
        
        <div class="botao">
            
            <a href="..\index.php"><img src="..\imagens\boc.jpg" ></a>
        </div>
        
    </body>
</html>