<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css\style.css">
        <title>NOTEBIRD</title>
    </head>
    <body>
        <?php
            $con = mysqli_connect('127.0.0.1','root','','notebird');
            $sql = "SELECT * FROM nota";
            $result = mysqli_query($con,$sql);

            while($row = mysqli_fetch_array($result)){
        ?>
        <section class="bloco">
            <div class="imagem">
                <img src="imagens\<?php echo $row['imagem'];?>">
            </div>
            
            <div class="texto">
                <h1><?php echo $row['titulo'];?></h1>
                <p><?php echo $row['resumo'];?></p>
                <form method="POST" action="php\nota.php">
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    <input type="submit" value="Leitura">
                </form>
            </div>
            <div class="linha"></div>
        </section>
          
        <?php
            }
            mysqli_close($con);
        ?>    

        <div class="botao">
            <a href="inserir.html"><img src="imagens\boc.jpg" ></a>
        </div>
        
    </body>
</html>