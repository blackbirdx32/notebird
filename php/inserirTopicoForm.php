<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="..\css\style.css">
        <title>INSERIR TOPICO - NOTA</title>
    </head>
    <body>
        <section class="blocoInserir">
            <form method="POST" action="..\php\inserirTopico.php">
                <input type="text" name="titulo" placeholder="Título:"><p>
                <input type="text" name="imagem" placeholder="Imagem(URL):"><p>
                <textarea type="text" name="texto" placeholder="Nota" rows="20" cols="50"></textarea><p>
                <select class="form-control" name="nota_id">
                    <?php 
                        $con = mysqli_connect("127.0.0.1","root","","notebird");
                        $sql = "SELECT * FROM nota";
                        $result = mysqli_query($con,$sql);
            
                        while($row = mysqli_fetch_array($result)){
                    ?>        
                    <option value="<?php echo $row['id'];?>"><?php echo $row['titulo'];?></option>
                    <?php             
                        }
                        mysqli_close($con);
                    ?>
                </select><p>    
                <input type="submit" value="Enviar">
            </form>
        </section>    

        <div class="botao">
            <a href="..\index.php"><img src="..\imagens\boc.jpg" ></a>
        </div>
        
    </body>
</html>