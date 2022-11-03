<?php

include 'db.php';

?>

<!DOCTYPE html>
<html lang=”es”>
<head>
    <meta charset=”UTF-8″ />
    <title>Registro Cliente</title>
    <link rel="stylesheet" href="Estilos.css">
</head>
<style>
    .menu{
    text-align: center;
    list-style:none;
    padding: 0;
    background: #C8E6C9;
    width:100%;
    max-width: 3000px;
    margin: auto;
  }
  .menu li a{
    text-decoration: none;
    color:#616161;
    padding:20px;
    display: block;
  }
  .menu li{
    display: inline-block;
    text-align: center;
  }
  .menu li a:hover{
    background:white;
  }

</style>
<body>
    <ul class="menu">
        <li class=""><a href="Index.html">Inicio</a</li>
        <li class=""><a href="#">Nuestra Historia</a</li>
        <li class=""><a href="#">Carta</a</li>
        <li class=""><a href="Login.html">Sesion Cliente</a</li>
        <li class=""><a href="LoginEmpresa.html">Sesion Empresa</a</li>
        <li class=""><a href="#">Acerca de</a></li>  
    </ul>
    <section id="container">
        <h1>Lista de Proveedores</h1>
        <a href="ProveedorRegistro.php" class="btn_new">Crear Proveedor</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Proveedor</th>
                <th>Contacto</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Cargo</th>
            </tr>
            <?php
                $query = mysqli_query($conectar, "SELECT usuarios.Id_usuario, usuarios.Nombre, usuarios.Apellido, usuarios.Correo, usuarios.Rut, cargo.Descripcion FROM usuarios INNER JOIN cargo ON usuarios.Idcargo = cargo.Id");
                $result = mysqli_num_rows($query);

                if($result >0){

                    while($data = mysqli_fetch_array($query)){
            
                ?>
                    <tr>
                        <td><?php echo $data["Id_usuario"] ?></td>
                        <td><?php echo $data["Nombre"] ?></td>
                        <td><?php echo $data["Apellido"] ?></td>
                        <td><?php echo $data["Correo"] ?></td>
                        <td><?php echo $data["Rut"] ?></td>
                        <td><?php echo $data["Descripcion"] ?></td>
                        <td>
                            <a class="link_edit" href="#">Editar</a>
                            <a class="link_delete" href="#">Eliminar</a>
                        </td>
                    </tr>
            <?php
                    }
                }
            ?>
        </table>
    </selection>
 </body>