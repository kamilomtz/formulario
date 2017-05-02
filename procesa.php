<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "universidad";
$port = "3306";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO estudiante (codigo, pnombre, snombre, papellido, sapellido)
VALUES ('".$_POST['cod_estudiante']."', '".$_POST['primer_nombre']."', '".$_POST['segundo_nombre']."', '".$_POST['primer_apellido']."', '".$_POST['segundo_apellido']."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>