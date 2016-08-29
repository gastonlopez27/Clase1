<html>
<head>
	<title></title>
</head>
<body>
<!-- en el body es lo que ve el cliente
<h1>Hola Mundo
primer regla para que el codigo php funcione tiene que estar dentro de un archivo .php

la segunda regla es que corra en el localhost:8080

internet information server???	</h1>
<?php

$nombre = "Gaston";

echo "Hola PHP, soy $nombre <br> salto de linea <br>";
echo "Hola PHP, soy ".$nombre;
echo '<br>Hola PHP $nombre, claramente es string insertado';
echo "<br><h2>Hola PHP </h2>";
echo '<br>Hola PHP soy '.$nombre;
?>
<?php

echo "Otro pedazo de codigo"
?>
-->



<?php

$veces = 1000000;
$con0 = 0;
$con1 = 0;
$con2 = 0;
$con3 = 0;
$con4 = 0;
$con5 = 0;
$con6 = 0;
$con7 = 0;
$con8 = 0;
$con9 = 0;



for ($i = 0; $i <= $veces; $i++) {

    switch (rand(0,9)



    	) {
    	case '0':
    		$con0++;
    		break;

    		case '1':
    		$con1++;
    		break;

    		case '2':
    		$con2++;
    		break;

    		case '3':
    		$con3++;
    		break;

    		case '4':
    		$con4++;
    		break;

    		case '5':
    		$con5++;
    		break;

    		case '6':
    		$con6++;
    		break;

    		case '7':
    		if ($con7 <= ($veces/20))
    		{
    		$con7++;
    		}
    	    else 
    		$i--;
    		break;

    		case '8':
    		$con8++;
    		break;

    		case '9':
    		$con9++;
    		break;

    	
    	default:
    		# code...
    		break;
    }
}

echo "El numero 0 salio un: ".($con0 / $veces * 100)."% <br>";
echo "El numero 1 salio un: ".($con1 / $veces * 100)."% <br>";
echo "El numero 2 salio un: ".($con2 / $veces * 100)."% <br>";
echo "El numero 3 salio un: ".($con3 / $veces * 100)."% <br>";
echo "El numero 4 salio un: ".($con4 / $veces * 100)."% <br>";
echo "El numero 5 salio un: ".($con5 / $veces * 100)."% <br>";
echo "El numero 6 salio un: ".($con6 / $veces * 100)."% <br>";
echo "El numero 7 salio un: ".($con7 / $veces * 100)."% <br>";
echo "El numero 8 salio un: ".($con8 / $veces * 100)."% <br>";
echo "El numero 9 salio un: ".($con9 / $veces * 100)."% <br>";

?>

<?php
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars)

//hacer array 

//var_dump es como echo pero para arrays
//mostrar desde javascript console.log("error")

?>
</body>
</html>
