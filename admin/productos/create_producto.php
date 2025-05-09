<?php
    include('../bd.php');
    $con = connection();

    $IdMarca = $_POST['IdMarca'];
    $IdCategoria = $_POST['IdCategoria'];
    $Nombre = $_POST['Nombre'];
    $Color = $_POST['Color'];
    $fichero = $_FILES['Imagen'];
    $path = "../../uploads/$Nombre.png";
    move_uploaded_file($fichero['tmp_name'], $path);

    $sql = "INSERT INTO producto VALUES('null','$IdMarca','$IdCategoria','$Nombre','$Color','$path')";
    $query = mysqli_query($con,$sql);

    if($query){
        header('Location: admin_productos.php');
    };
?>
