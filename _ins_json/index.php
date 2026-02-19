<?php
    $title = "Pruebas";
    $add = false;
    require "_inc.php";
    inicio();

    if($debug){
        echo "<pre><code>";
        print_r($personajes);
        echo "</pre></code>";
    };

    echo "<h2>Lista de personajes</h2><section class='listado'>";
    listar();
    echo "</section>";

    if($add){
        echo "
            <h2>Añade un personaje:</h2>
            <form action='agregar.php' method='get'>
                <label>Nombre: <input type='text' placeholder='Nombre del personaje.' name='n'></label><br>
                <label>Acrónimo del juego en el que apareció por primera vez (sin KH): <input type='text' placeholder='Su primera aparición' name='p'></label><br>
                <label>Dale una pequeña descripción: <input type='text' placeholder='Descripción' name='d'></label><br>
                <input type='submit' value='Mandar el personaje.'>
            </form>
        ";
    };

    terminar();
?>