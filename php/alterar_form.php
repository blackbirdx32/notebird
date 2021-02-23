<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="..\css\style.css">
        <title>ALTERAR - NOTA</title>
    </head>
    <body>
        <?php
            $id = $_POST['id'];

            $con = mysqli_connect('127.0.0.1','root','','notebird');
            $sql = "SELECT * FROM nota WHERE id='$id'";
            $result = mysqli_query($con,$sql);
               
            while($row = mysqli_fetch_array($result)){
        ?>
        <section class="blocoInserir">
            <form method="POST" action="alterar.php">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <input type="text" name="titulo" value="<?php echo $row['titulo'];?>"><p>
                <input type="text" name="imagem" value="<?php echo $row['imagem'];?>"><p>
                <textarea type="text" name="resumo" rows="2" cols="50"><?php echo $row['resumo'];?></textarea><p>
                <textarea type="text" name="texto" rows="20" cols="50"><?php echo $row['texto'];?></textarea><p>
                <input type="submit" value="Enviar">
            </form>
        </section>    
        <?php
            }
        ?>        
        <div class="botao">
            <a href="..\index.php"><img src="..\imagens\boc.jpg" ></a>
        </div>
        
    </body>
</html>