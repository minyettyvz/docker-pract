

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alvaro - Docker</title>
</head>
<body>

    <h1>HOLA MUDNO</h1>
    
    <p>Esto es una prueba con DOCKER</p>

    <?php
        $mysqli = new mysqli("mysql", "root", "admin", "144444");

        if ($mysqli->connect_error) {
            die("Error de conexión: " . $mysqli->connect_error);
        }

        $sql = "SELECT * FROM usuarios";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo  "NAME: " . $row["nombre"] . "<br>";
            }
        } else {
            echo "SIN DATA";
        }

        $mysqli->close();
    ?>
</body>
</html>