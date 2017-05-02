<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
  <title>FORMULARIO DE REGISTRO</title>
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
<nav class="nav-extended">
    <div class="nav-content">
      <div class="container"><span class="nav-title">FORMULARIO DE REGISTRO UNIVERSIDAD DE NARIÑO</span></div>
    </div>
    <div class="progress">
      <div class="determinate" style="width: 100%"></div>
  </div>
  </nav>
  <hr>
    <form class="col s12" action="procesa.php" method="POST">
  <div class="row">
        <div class="col s12">
          <fieldset>
          <legend><i class="material-icons prefix">account_circle</i></legend>
          <div class="col s12">
          <div class="input-field col s6">
            <input placeholder="Ingrese su Código" id="cod_estudiante" type="text" class="validate" name="cod_estudiante">
            <label for="cod_estudiante">Código</label>
          </div>
        <div class="input-field col s6">
          <input placeholder="Ingrese su Primer Nombre" id="primer_nombre" type="text" class="validate" name="primer_nombre">
          <label for="primer_nombre">Primer Nombre</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Ingrese su Segundo Nombre" id="segundo_nombre" type="text" class="validate" name="segundo_nombre">
          <label for="segundo_nombre">Segundo Nombre</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Ingrese su Primer Apellidos
          " id="primer_apellido" type="text" class="validate" name="primer_apellido">
          <label for="primer_apellido">Primer Apellido</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Ingrese su Segundo Apellido" id="segundo_apellido" type="text" class="validate" name="segundo_apellido">
          <label for="segundo_apellido">Segundo Apellido</label>
        </div>
        </div>

        </fieldset>

        </div>
    <div class="col s12" align="center">
      <br>
      <input type="submit" name="" value="registrar">
    </div>

  </div>
</div>
  </form>
</body>
</html>

</body>
</html>