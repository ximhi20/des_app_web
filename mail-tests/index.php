<?php
    $titulo = "Mandando mail masivo";
    $nombre = "Pruebas de mandado de mail masivo";

    require_once "_functions.php";
    inclusion("inicio");

    foreach (USUARIOS["nombre"] as $usuario => $info) {
        $id_interes = $info["interes"];
        $interes_datos = USUARIOS["intereses"][$id_interes];

        $interes_titulo = $interes_datos["titulo"];
        $interes_info = $interes_datos["info"];
        $interes_producto = $interes_datos["producto"];

        $para = "{$usuario} <{$info["mail"]}>";
        $asunto = "{$id_interes} para {$usuario}";
        $mensaje = "
            <h1>¡Saludos, {$usuario}!</h1>
            <p>Según nuestras fuentes, te interesa {$interes_titulo}, lo cual significa que {$interes_info}, por lo que nos parece que te podría interesar nuestro producto: {$interes_producto}.<p>
            </p>En caso afirmativo puedes seguir el siguiente <a href='https://www.tienda.kh' target='_blank'>enlace</a> y conseguirlo hoy mismo.</p>
            <p>¡Mucha suerte con tus objetivos!.</p>
        ";

        if(mail($para, $asunto, $mensaje, $cabeceras)){
            echo "<p>Mensaje mandado correctamente a {$usuario}</p>";
        }
        else{
            echo "<p>Mensaje fallido</p>";
        }

        usleep(50000);
    }

    echo "<a href='index.php'>Volver a mandar los correos</a>";


    inclusion("final");
?>