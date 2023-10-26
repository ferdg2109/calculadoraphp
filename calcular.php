<html>
<head>
<meta charset="utf-8">
    <title>Calcular</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="container p-5 my-5 bg-primary text-white">
<?php
if($_REQUEST ["radiol"] == "suma"){
    $suma = $_REQUEST ["valor1"] + $_REQUEST["valor2"];
    echo "La suma es: ".$suma;
 }else if($_REQUEST ["radiol"] == "resta"){
    $resta = $_REQUEST ["valor1"] - $_REQUEST["valor2"];
    echo "La resta es: ".$resta;
 }else if($_REQUEST ["radiol"] == "multiplicacion"){
    $multiplicacion = $_REQUEST ["valor1"] * $_REQUEST["valor2"];
    echo "La multiplicación es: ".$multiplicacion;
 }else if($_REQUEST ["radiol"] == "division"){
    $division = $_REQUEST ["valor1"] / $_REQUEST["valor2"];
    echo "La división es: ".$division;
}
?>
<br><br>
<a href="formulario.html"  class="btn btn-light">Inicio</a>
    </div>

</body>
</html>
