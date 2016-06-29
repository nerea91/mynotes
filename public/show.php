<?php

$aux = $_GET['nota'];

$archivo = file_get_contents($aux); //Guardamos archivo.txt en $archivo
$archivo = ucfirst($archivo); //Le damos un poco de formato
$archivo = nl2br($archivo); //Transforma todos los saltos de linea en tag <br/>
echo "<strong>$aux:</strong> <br><br>";
echo $archivo;
?>
<br><br><br><a class="secondary button expand" href="/">Volver</a>
