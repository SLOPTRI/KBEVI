<?php
    include('../bd.php');
    $con = connection();

    $Nombre = $_POST['Nombre'];
    $Desc = $_POST['Desc']; 

    $sql = "INSERT INTO marca VALUES (NULL, '$Nombre','$Desc')";
    $query = mysqli_query($con,$sql);

    if($query){
        header('Location: admin_marcas.php');
    };
?>
