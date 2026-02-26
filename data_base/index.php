<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL prueba</title>
</head>
<body>
    <header>
        <h1>Probando SQL</h1>
    </header>
    <main>
        <?php
            // Data base conection values
            const SERV = "localhost"; // Server name
            const USER = "root";      // User name
            const PASS = "root";      // Password
            const DBNM = "local";     // Data base name

            // Create connection
            $conn = new mysqli(SERV, USER, PASS, DBNM);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query
            $sql = "SELECT * FROM Videojuegos LIMIT 15";
            // Execute the SQL query
            $result = $conn->query($sql);

            // Process the result set
            echo "<ul>";
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<li>id: {$row["id"]} - El videojuego llamado {$row["Nombre"]}, que estubo originalmente en la plataforma {$row["Plataforma"]}, creada por {$row["Desarrolladora"]} y publicada por {$row["Publicadora"]}, salío el {$row["Lanzamiento"]}.</li>";
                }
                echo "</ul>";
            }
            else {
                echo "0 results";
            }

            // Closing connection
            $conn->close();
        ?>
    </main>
    <footer>
        <p>&copy; Juegos.</p>
    </footer>
</body>
</html>