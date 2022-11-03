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
        <a href="ProductoRegistro.php" class="btn_new">Crear Proveedor</a>
        <table>
            <tr>
                <th>Codigo Producto</th>
                <th>Descripcion</th>
                <th>Proveedor</th>
                <th>Costo</th>
                <th>Categoria</th>
                <th>Stock</th>
                <th>Proveedor</th>
            </tr>
            <?php
                $query = mysqli_query($conectar, "SELECT producto.CodProducto , producto.Descripcion, producto.Proveedor, producto.Costo, producto.Categoria, producto.Stock, proveedor.Proveedor FROM producto INNER JOIN proveedor ON producto.Proveedor = proveedor.Id_proveedor");
                $result = mysqli_num_rows($query);

                if($result >0){

                    while($data = mysqli_fetch_array($query)){
            
                ?>
                    <tr>
                        <td><?php echo $data["CodProducto"] ?></td>
                        <td><?php echo $data["Descripcion"] ?></td>
                        <td><?php echo $data["Proveedor"] ?></td>
                        <td><?php echo $data["Costo"] ?></td>
                        <td><?php echo $data["Categoria"] ?></td>
                        <td><?php echo $data["Stock"] ?></td>
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