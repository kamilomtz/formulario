<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "universidad";
$port ="3306";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.structure.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
  <script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
<?php
echo "Connected successfully"."<br>";

$sql = "SELECT codigo, pnombre, snombre, papellido FROM estudiante";
$result = $conn->query($conn, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo <div class="container-fluid">"Código: " . $row["codigo"]. " - Name: " . $row["pnombre"]. " " . $row["snombre"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>