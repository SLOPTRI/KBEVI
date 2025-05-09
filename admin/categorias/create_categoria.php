<?php
    include('../bd.php');
    $con = connection();

    $Nombre = $_POST['nombre'];
    $Desc = $_POST['desc'];

    $sql = "INSERT INTO categoria VALUES (NULL, '$Nombre','$Desc')";
    $query = mysqli_query($con,$sql);

    if($query){
        header('Location: admin_categorias.php');
    };
?>