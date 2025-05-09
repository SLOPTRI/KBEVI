<?php
    include('../bd.php');

    $con = connection();

    $sql = "SELECT p.*, 
       (SELECT c.Nombre 
        FROM categoria c 
        WHERE c.IdCategoria = p.IdCategoria) AS NombreCategoria
        FROM producto p;";

    $query = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBEVI/Admin/Productos</title>
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
        <div class="main__admin__text"><h1>ADMIN PRODUCTOS</h1></div>
        <div class="main__admin__db">
            <table class="main__admin__db__table">
                <tr class="main__admin__db__table__tr">
                    <td>Id Producto</td>
                    <td>Marca</td>
                    <td>Categoria</td>
                    <td>Nombre</td>
                    <td>Color</td>
                    <td>Imagen</td>
                    <td></td>
                    <td></td>
                </tr>
                <?php   
                        $marca=array();
                        $sql2 = "SELECT * FROM marca";
                        $query2 = mysqli_query($con,$sql2);
                        while($row2 = mysqli_fetch_assoc($query2)):
                            $marca[$row2['IdMarca']] = $row2['Nombre'];
                        endwhile;
                        
                        while($row = mysqli_fetch_array($query)):
                        
                    ?>
                <tr class="main__admin__db__table__tr">
                    <td><?= $row['IdProducto']?></td>
                    <td><?= $marca[$row['IdMarca']]?></td>
                    <td><?= $row['NombreCategoria']?></td>
                    <td><?= $row['Nombre']?></td>
                    <td><?= $row['Color']?></td>
                    <td><img src="<?= $row['Imagen']?>"alt="" class="main__admin__db__table__tr__img"></td>
                    <td><a href="update_producto.php?id=<?= $row['IdProducto']?>" class="main__admin__db__table__edit">Editar</a></td>
                    <td>
                        <form action="delete_producto.php" method="post" class="main__admin__db__table__seguro">
                            <input type="hidden" name="id" value="<?=$row['IdProducto']?>">
                            <button type="submit" class="main__admin__db__table__delete">Eliminar</button>
                            <input type="checkbox" name="seguro" class="main__admin__db__table__delete__seguro">
                        </form>
                    </td>
                </tr>
                <?php
                    endwhile;
                ?>
            </table>
        </div>
        <div class="main__admin__container">
            <form action="create_producto.php" method="POST" enctype="multipart/form-data">
                <article>
                    <input type="text" name="IdMarca" required  class="main__admin__container__form" placeholder="IdMarca:"><br><br>
                </article>
                <article>
                    <input type="text" name="IdCategoria" required  class="main__admin__container__form" placeholder="IdCategoria:"><br><br>
                </article>
                <article>        
                    <input type="text" name="Nombre" required  class="main__admin__container__form" placeholder="Nombre:"><br><br>
                </article>  
                <article>  
                <input type="text" name="Color" required  class="main__admin__container__form" placeholder="Color:"><br><br>
                </article>
                <article>
                    <input type="file" name="Imagen" required  class="main__admin__container__form"><br><br>
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
