<?php
    include('../bd.php');

    $con = connection();
    $id = $_POST['id'];
    $sql = "DELETE FROM categoria WHERE IdCategoria='$id'";
    if(isset($_POST['seguro'])){
        $query = mysqli_query($con,$sql);

        if($query){
            header('Location: admin_categorias.php');
        }
    
    } else{
        header('Location: admin_categorias.php');
    }
?>