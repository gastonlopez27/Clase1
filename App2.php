<html>
<head>
	<title></title>
</head>
<body>
<?php

// App 2


echo date("m"). "<br>";

switch (date("m")) {
		case '1':
		echo "Es verano";
		break;

		case '2':
		echo "Es verano";
		break;

		case '3':
		if(date("y")<21)
			{echo "Es verano";}
		else
			echo "Es otoño";
		break;

		case '4':
		echo "Es otoño";
		break;

		case '5':
		echo "Es otoño";
		break;

		case '6':
		if(date("y")<21)
			{echo "Es otoño";}
		else
			echo "Es invierno";
		break;

		case '7':
		echo "Es invierno";
		break;

		case '8':
		echo "Es invierno";
		break;

		case '9':
		if(date("y")<21)
			{echo "Es invierno";}
		else
			echo "Es primavera";
		break;

		case '10':
		echo "Es primavera";
		break;

		case '11':
		echo "Es primavera";
		break;

		case '12':
		if(date("y")<21)
			{echo "Es primavera";}
		else
			echo "Es verano";
		break;
	
	default:
		# code...
		break;
}

?>
</body>
</html>