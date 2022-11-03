<?php

include 'db.php';

?>

<!DOCTYPE html>
<html lang=”es”>
<head>
    <meta charset=”UTF-8″ />
    <title>Registro de Empleados</title>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body>
    <h1>Registro de Empleado</h1>
    <form action="ProductoRegistro.php" method="post" class="form-register">
        <h2 class="form__titulo">Crear Cuenta</h2>
        <div class="contenedor-inputs">
            <div class="NombreProveedor">
                <label for="proveedor">Proveedor</label>
                <?php
                    $query_proveedor = mysqli_query($conectar, "SELECT Id_proveedor, Proveedor FROM proveedor ORDER BY proveedor ASC");
                    $result_proveedor = mysqli_num_rows($query_proveedor);
                    mysqli_close($conectar);
                ?>
                <select name="proveedor" id="proveedor">
                <?php

                    if($result_proveedor > 0){
                        while($proveedor = mysqli_fetch_array($query_proveedor)){
                ?>
                    <option value="<?php echo $proveedor['Id_proveedor']; ?>"><?php echo $proveedor['Proveedor']; ?></option>
                <?php
                        }
                    }
                ?>
                </select>
            </div>
            <div class="DescripcionProducto"><input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" class="input-50" required></div>
            <div class="CategoriaProducto"><input type="text" name="categoria" id="categoria" placeholder="Categoria" class="input-50" required></div>
            <div class="CostoProducto"><input type="text" name="costo" id="costo" placeholder="Costo" class="input-50" required></div>
            <div class="StockProducto"><input type="text" name="stock" id="stock" placeholder="Stock" class="input-50" required></div>
            <input type="submit" value="Registrar" class="btn-enviar">                 
        </div> 
    </form>
</body>
</html>