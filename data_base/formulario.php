<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $titulo = "Actualizar";
        $nombre = "Actualiza la ficha con el id $id";
    }
    else{
        $titulo = "Crear nuevo";
        $nombre = "Crea una nueva ficha";
    }

    require_once "_functions.php";

    incluir("inicio");

    if($_POST){
        $Nombre = $_POST["Nombre"];
        $Descripción = $_POST["Descripción"];
        $Tipo = $_POST["Tipo"];
        $Plataforma = $_POST["Plataforma"];
        $Desarrolladora = $_POST["Desarrolladora"];
        $Publicadora = $_POST["Publicadora"];
        $Precio = $_POST["Precio"];
        $Lanzamiento = $_POST["Lanzamiento"];

        if(isset($_GET["id"])){
            conectar();
            $sql = "UPDATE `videojuegos` SET `Nombre` = '$Nombre', `Descripción` = '$Descripción', `Tipo` = '$Tipo', `Plataforma` = '$Plataforma', `Desarrolladora` = '$Desarrolladora', `Publicadora` = '$Publicadora', `Precio` = '$Precio', `Lanzamiento` = '$Lanzamiento' WHERE `id` = '$id';";
            ejecutar();
            if($result){
                echo "<p>Info actualizada correctamente</p>";
            }
            cerrar();
            echo "<a href='formulario.php?id=$id'><button type='button'>Volver a actualizarlo</button></a>";
        }
        else{
            conectar();
            $sql = "INSERT INTO `videojuegos` (`Nombre`, `Descripción`, `Tipo`, `Plataforma`, `Desarrolladora`, `Publicadora`, `Precio`, `Lanzamiento`) VALUES ('$Nombre', '$Descripción', '$Tipo', '$Plataforma', '$Desarrolladora', '$Publicadora', '$Precio', '$Lanzamiento');";
            ejecutar();
            if($result){
                echo "<p>Info añadida correctamente</p>";
            }
            cerrar();
            echo "<a href='formulario.php'><button type='button'>Hacer otra</button></a>";
        }
    }
    else{
        echo "<p class='advertencia'>(Nota, no usar el símbolo <span>'</span>, usar <span>`</span> en cuenta)</p>";
        if(isset($_GET["id"])){
            conectar();
            $sql = "SELECT * FROM `videojuegos` WHERE `id` = '$id'";
            ejecutar();


            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    echo "<form method='post' class='crear'>
                        <label>Nombre: <input type='text' name='Nombre' placeholder='Nombre' value='{$row["Nombre"]}' required></label><br>
                        <label>Descripción: <textarea name='Descripción' placeholder='Descripción' rows='4' cols='50'>{$row["Descripción"]}</textarea></label><br>
                        <label>Tipo: <input type='text' name='Tipo' placeholder='Tipo (RPG/Acción...)' value='{$row["Tipo"]}'></label><br>
                        <label>Plataforma: <input type='text' name='Plataforma' placeholder='Plataforma' value='{$row["Plataforma"]}'></label><br>
                        <label>Desarrolladora: <input type='text' name='Desarrolladora' placeholder='Desarrolladora' value='{$row["Desarrolladora"]}'></label><br>
                        <label>Publicadora: <input type='text' name='Publicadora' placeholder='Publicadora' value='{$row["Publicadora"]}'></label><br>
                        <label>Precio: <input type='number' step='0.01' name='Precio' placeholder='Precio' value='{$row["Precio"]}' required></label><br>
                        <label>Lanzamiento: <input type='date' name='Lanzamiento' placeholder='Lanzamiento' value='{$row["Lanzamiento"]}' required></label><br>
                        <button type='submit'>Mandar la información actualizada</button>
                    </form>";
                }
            }
            else{
                echo "<p>Elemento no encontrado.</p>";
            }
            cerrar();
        }
        else{
            echo "<form method='post' class='crear'>
                <label>Nombre: <input type='text' name='Nombre' placeholder='Nombre' required></label><br>
                <label>Descripción: <textarea name='Descripción' placeholder='Descripción' rows='4' cols='50'></textarea></label><br>
                <label>Tipo: <input type='text' name='Tipo' placeholder='Tipo (RPG/Acción...)'></label><br>
                <label>Plataforma: <input type='text' name='Plataforma' placeholder='Plataforma'></label><br>
                <label>Desarrolladora: <input type='text' name='Desarrolladora' placeholder='Desarrolladora'></label><br>
                <label>Publicadora: <input type='text' name='Publicadora' placeholder='Publicadora'></label><br>
                <label>Precio: <input type='number' step='0.01' name='Precio' placeholder='Precio' required></label><br>
                <label>Lanzamiento: <input type='date' name='Lanzamiento' placeholder='Lanzamiento' required></label><br>
                <button type='submit'>Mandar la información</button>
            </form>";
        }
    }

    incluir("terminar");
?>