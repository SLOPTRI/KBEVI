<?php
    include('../bd.php');

    $con = connection();

    $sql = "SELECT * FROM categoria";
    $query = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBEVI/Admin/Categorias</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>
    <header class="header">
        <img class="header__logo" src="../../img/logo.png" alt="">
        <a href="../index.php" class="header__admin__a">Inicio</a>
        <p class="logo__text">
            <span class="logo__text__letter">S</span>
            <span class="logo__text__letter">L</span>
            <span class="logo__text__letter">T</span>
        </p>
    </header>
    <main class="main__admin">
        <div class="main__admin__text"><h1>ADMIN CATEGORIAS</h1></div>
        <div class="main__admin__db">
        <table class="main__admin__db__table">
                <tr class="main__admin__db__table__tr">
                    <td>Id Categoria</td>
                    <td>Nombre</td>
                    <td>Descripción</td>
                    <td></td>
                </tr>
                <?php
                        while($row = mysqli_fetch_array($query)):
                    ?>
                <tr class="main__admin__db__table__tr">
                    <td><?=$row['IdCategoria']?></td>
                    <td><?=$row['Nombre']?></td>
                    <td><?=$row['Descripción']?></td>
                    <td><a href="update_categoria.php?id=<?=$row['IdCategoria']?>" class="main__admin__db__table__edit">Editar</a></td>
                    <td>
                        <form action="delete_categoria.php" method="post" class="main__admin__db__table__seguro">
                            <input type="hidden" name="id" value="<?=$row['IdCategoria']?>">
                            <button type="submit" class="main__admin__db__table__delete">Eliminar</button>
                            <input type="checkbox" name="seguro" class="main__admin__db__table__delete__seguro">
                        </form>
                    </td>
                </tr>
                <?php endwhile ?>
            </table>
        </div>
        <div class="main__admin__container">
            <form action="create_categoria.php" method="post">
                <article>        
                    <input type="text" name="nombre" required  class="main__admin__container__form" placeholder="Nombre:"><br><br>
                </article>
                <article>        
                    <input type="text" name="desc" required  class="main__admin__container__form" placeholder="Descripcion:"><br><br>
                </article>   
                <button type="submit" class="main__admin__container__form__buttom">Enviar</button>
            </form>
        </div>
    </main>
    <footer class="footer">
        <p class="logo__text">
            <span class="logo__text__letter">A</span>
            <span class="logo__text__letter">D</span>
            <span class="logo__text__letter">M</span>
            <span class="logo__text__letter">I</span>
            <span class="logo__text__letter">N</span>
        </p>
        <p class="footer__container__text">Creado por <a href="#">@Sloptri</a></p>
    </footer>
</body>
</html> 
