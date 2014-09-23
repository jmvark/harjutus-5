<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title>harjutus-5</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<h2>Booleans</h2>
<?php 
	$result1 = true;
	$result2 = false;
	$result3 = "lampsõna";
echo $result1;
echo "<br>";

echo "Result 1:" . $result1;
echo "<br>";
echo "Result 2:" . $result2;
echo "<br>";

echo "Kas result 1 on boolean?" . is_bool($result1);
echo "<br>";
echo "Kas result 2 on boolean?" . is_bool($result2);
echo "<br>";
echo "Kas result 3 on boolean?" . is_bool($result3);
?>
<h2>Andmetüüpide olekud</h2>
<h3>NULL</h3>
<h2>NULL</h2>
<?php
	$var1 = null;
	$var2 = "3";
	$var3 = 0;

	

	echo "kas var1 on NULL?" . is_null($var1);
	echo "<br>";
		echo "kas var2 on NULL?" . is_null($var2);
		echo "<br>";
			echo "kas var3 on NULL?" . is_null($var3);
			echo "<br>";
				echo "kas var4 on NULL?" . is_null($var4);
?>

<h3>SET</h3>
<?php
	echo "kas var1 on SET? " . isset($var1);
	echo "<br>";
	echo "kas var2 on SET? " . isset($var2);
	echo "<br>";
	echo "kas var3 on SET? " . isset($var3);
	echo "<br>";
	echo "kas var4 on SET? " . isset($var4);
	echo "<br>";


	?>
<h3>Empty</h3>
<?php
	echo "kas var1 on empty? " . empty($var1);
	echo "<br>";

	echo "kas var2 on empty? " . empty($var2);
	echo "<br>";
	echo "kas var3 on empty? " . empty($var3);
	echo "<br>";
	echo "kas var4 on empty? " . empty($var4);
	echo "<br>";
?>
<h2>Andmetüübi teisendamine</h2>
<?php 
	$count = 2;
	echo $count;
	echo "<br>";
	echo gettype($count); 
	settype($count, "string"); 
	echo "<br>";
	echo $count;
	echo "<br>";
	echo gettype($count); 
	settype($count, "integer"); 
	echo "<br>";
	echo $count;
	echo "<br>";
	echo gettype($count); 
	settype($count, "array"); 
	echo "<br>";

	echo $count;
	print_r($count);
	echo "<br>";
	echo gettype($count); 
	settype($count, "float"); 
	echo "<br>";
	echo $count;
	echo "<br>";
	echo gettype($count); 
	settype($count, "boolean"); 
	echo "<br>";
	echo $count;
	echo "<br>";
	echo gettype($count); 
?>
<h2>Konstandid</h2>
<?php define("MAX_WIDTH", 980);
echo MAX_WIDTH; 

define("MAX_WIDTH", 666);
echo MAX_WIDTH; ?>


</body>
</html>