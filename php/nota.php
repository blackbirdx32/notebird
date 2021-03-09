<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="..\css\style.css">
        <title>NOTEBIRD</title>
    </head>
    <body>
        <?php
            $id = $_POST['id'];

            $con = mysqli_connect('127.0.0.1','root','','notebird');
            $sql = "SELECT * FROM nota WHERE id='$id'";
            $result = mysqli_query($con,$sql);

            while($row = mysqli_fetch_array($result)){
        ?>
        <section class="bloco">
            <div class="imagemNota">
                <img src="..\imagens\<?php echo $row['imagem'];?>">
            </div>
            
            <div class="textoNota">
                <h1><?php echo $row['titulo'];?></h1>
                <p><?php echo $row['resumo'];?></p>
                <p class="justificado"><?php echo $row['texto'];?></p>
            </div>

            <nav class="opc">
                <form method="POST" action="alterarForm.php">
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    <input type="submit" value="Alterar">
                </form>

                <form method="POST" action="deletar.php">
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    <input class="vermelho" type="submit" value="Excluir">
                </form>
            </nav>

            <div class="linha"></div>
        </section>
        
        <section class="bloco">
                <?php
                    $sql1 = "SELECT * FROM topico";
                    $result1 = mysqli_query($con,$sql1);
        
                    while($row1 = mysqli_fetch_array($result1)){
                        if ($row1['nota_id'] == $row['id']){
                ?>

                <div class="topico">
                    <img src="..\imagens\<?php echo $row1 ['imagem'];?>">
                    <form method="POST" action="topico.php">
                        <input type="hidden" name="id" value="<?php echo $row1['id'];?>">
                        <button type="submit"><img src="..\imagens\olho.png"></button>
                    </form>
                </div>
                
                <?php
                                }
                        }
                    }
                    mysqli_close($con);
                ?> 

                <div class="botaoTopico">
                    <a href="inserirTopicoForm.php"><img src="..\imagens\cruz.png" ></a>
                </div>
                <div class="linha"></div>
        </section>
             
        
        <div class="botao">
            
            <a href="..\index.php"><img src="..\imagens\boc.jpg" ></a>
        </div>
        
    </body>
</html>