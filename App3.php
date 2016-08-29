<html>
<head>
	<title></title>
</head>
<body>
<?php

// App3

$a=1;
$b=1;
$c=7;

$digitos = array();

$digitos[] = $a;
$digitos[] = $b;
$digitos[] = $c;



sort($digitos);

if($digitos[1]!=$digitos[0] and $digitos[1]!=$digitos[2])
{
echo "El numero del medio es: $digitos[1]";
}
else
echo  "No hay valor del medio";
?>
</body>
</html>