<?php
    include('admin/bd.php');

    $con = connection();

    $sql = "SELECT p.*, 
       (SELECT m.Nombre 
        FROM marca m 
        WHERE m.IdMarca = p.IdMarca) AS NombreMarca
        FROM producto p;";

    $query = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBEVI/Productos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="header">
        <img class="header__logo" src="img/logo.png" alt="">
        <section class="menu__movil">
            <a class="menu__item" href="index.php">Inicio</a>
            <a class="menu__item" href="marcas.php">Marcas</a>
            <a class="menu__item" href="categorias.php">Categorias</a>
        </section>
        <p class="logo__text">
            <span class="logo__text__letter">S</span>
            <span class="logo__text__letter">L</span>
            <span class="logo__text__letter">T</span>
        </p>
    </header>
    <main class="main">
        <section class="product">
            <div class="product__row">
                <div class="product__row__tittle">
                    <h1>Nuestro - Catálogo</h1>
                </div>
            <?php 
                while($row = mysqli_fetch_array($query)):
            ?>
                <div class="product__row__item">
                    <h1 class="product__row__item__text"><?= $row['NombreMarca']?>  <?= $row['Nombre']?></h1>
                    <img src="uploads/<?= $row['Nombre']?>.png" alt="" class="product__row__item__img">
                </div>
            <?php endwhile?>
            </div>        
        </section>
        <aside class="menu__container">
            <section class="menu">
                <a class="menu__item" href="index.php">Inicio</a>
                <a class="menu__item" href="marcas.php">Marcas</a>
                <a class="menu__item" href="categorias.php">Categorias</a>
            </section>
        </aside>
    </main>
    <footer class="footer">
        <p class="logo__text">
            <span class="logo__text__letter">S</span>
            <span class="logo__text__letter">L</span>
            <span class="logo__text__letter">T</span>
        </p>
        <p class="footer__container__text">Creado por <a href="#">@Sloptri</a></p>
    </footer>
</body>
</html>
