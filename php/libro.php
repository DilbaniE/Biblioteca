<?php

include 'conexion.php';

if(isset($_POST['submit'])){
    $titulo=$_POST['titulo'];
    $autor=$_POST['autor'];
    $descripcion=$_POST['descripcion'];

    $sql = "insert into `libros` (titulo, autor, descripcion)
    values ('$titulo', '$autor', '$descripcion')";
    $result = mysqli_query($con, $sql);
    if($result){
        //echo "Datos agregados correctamente";
        header('location:../index.php');
    }else {
        die(mysqli_error($con));
    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operations</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body >
    <div class="container bg-dark text-light  ">
        <h1 class="text-center">Agregar Libro</h1>
        <form method="post">
            <div class="mb-3 my-2 m-5">
                <label>Titulo</label>
                <input type="text" class="form-control" name="titulo" placeholder="Cien años de soledad">
            
            </div>
            <div class="mb-3 my-2 m-5">
                <label>Autor</label>
                <input type="text" class="form-control" name="autor"  placeholder="Gabriel Gacia Marquez" >
            </div>
            <div class="mb-3 my-2 m-5">
                <label>Descripción</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Una obra literaria .....">
            </div>
        <div class="text-center my-5">
            <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
        </div>
            
        </form>
    </div>




    <script src="./js/bootstrap.js"></script>
</body>

</html>