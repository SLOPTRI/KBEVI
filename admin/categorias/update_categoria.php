<?php
    include('../bd.php');

    $con = connection();

    $id = $_GET['id'];
    $sql = "SELECT * FROM Categoria WHERE IdCategoria='$id'";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query,MYSQLI_ASSOC);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];

        $sql_2 = "UPDATE categoria SET Nombre='$nombre' WHERE IdCategoria='$id'";
        $query_2 = mysqli_query($con,$sql_2);
        if($query_2){
            header('Location: admin_categorias.php');
        };        
    }
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
        <a href="../admin.php" class="header__admin__a">Inicio</a>
        <p class="logo__text">
            <span class="logo__text__letter">S</span>
            <span class="logo__text__letter">L</span>
            <span class="logo__text__letter">T</span>
        </p>
    </header>
    <main class="main__admin">
        <div class="main__admin__text"><h1>ADMIN CATEGORIAS</h1></div>
        <div class="main__admin__container">
            <form method="post">
                <article>        
                    <input type="text" name="nombre" required  class="main__admin__container__form" placeholder="Nombre:"><br><br>
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