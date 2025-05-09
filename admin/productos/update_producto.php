<?php
    include('../bd.php');

    $con = connection();

    $id = $_GET['id'];
    $sql = "SELECT * FROM producto WHERE IdProducto='$id'";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query,MYSQLI_ASSOC);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_marca = $_POST['IdMarca'];
        $id_categoria = $_POST['IdCategoria'];
        $nombre = $_POST['Nombre'];
        $color = $_POST['Color'];
        $fichero = $_FILES['Imagen'];
        $path = "../../uploads/$id.png";
        move_uploaded_file($fichero['tmp_name'], "$path");
        

        $sql_2 = "UPDATE producto SET IdMarca='$id_marca', IdCategoria='$id_categoria',Nombre='$nombre',Color='$color',Imagen='$path' WHERE IdProducto=$id";
        if (!$_FILES['Imagen']){
            $sql_2 = "UPDATE producto SET IdMarca='$id_marca', IdCategoria='$id_categoria',Nombre='$nombre',Color='$color' WHERE IdProducto=$id";    
        }
        $query_2 = mysqli_query($con,$sql_2);
        if($query_2){
            header('Location: admin_productos.php');
        };        
    }
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
        <a href="../admin.php" class="header__admin__a">Inicio</a>
        <p class="logo__text">
            <span class="logo__text__letter">S</span>
            <span class="logo__text__letter">L</span>
            <span class="logo__text__letter">T</span>
        </p>
    </header>
    <main class="main__admin">
        <div class="main__admin__text"><h1>ADMIN PRODUCTOS</h1></div>
        <div class="main__admin__container">
            <form method="POST" enctype="multipart/form-data">
                <article>
                    <input type="text" name="IdMarca" required  class="main__admin__container__form" value="<?= $row['IdMarca']?>"><br><br>
                </article>
                <article>
                    <input type="text" name="IdCategoria" required  class="main__admin__container__form" value="<?= $row['IdCategoria']?>"><br><br>
                </article>
                <article>        
                    <input type="text" name="Nombre" required  class="main__admin__container__form" value="<?= $row['Nombre']?>"><br><br>
                </article>  
                <article>  
                    <textarea name="Color" rows="4" cols="50" required  class="main__admin__container__form"><?= $row['Color']?></textarea><br><br>
                </article>
                <article>
                    <input type="file" name="Imagen" class="main__admin__container__form"><br><br>
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