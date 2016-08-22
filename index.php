<html>
<head>
	<title></title>
</head>
<body>
<!-- en el body es lo que ve el cliente
<h1>Hola Mundo</h1>
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

$veces = 10;
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
    
    switch (rand(0,9)) {
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
    		$con7++;
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
echo "$con0 <br>"
echo "$con1 <br>"
echo "$con2 <br>"
echo "$con3 <br>"
echo "$con4 <br>"
echo "$con5 <br>"
echo "$con6 <br>"
echo "$con7 <br>"
echo "$con8 <br>"
echo "$con9 <br>"



?>



</body>
</html>
