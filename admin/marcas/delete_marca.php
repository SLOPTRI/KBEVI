<?php
    include('../bd.php');

    $con = connection();
    $id = $_POST['id'];
    $sql = "DELETE FROM marca WHERE IdMarca='$id'";
    if(isset($_POST['seguro'])){
        $query = mysqli_query($con,$sql);

        if($query){
            header('Location: admin_marcas.php');
        }
    
    } else{
        header('Location: admin_marcas.php');
    }
?>