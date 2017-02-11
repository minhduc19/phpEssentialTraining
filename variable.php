<?php 
//echo "hello"."<br>"."there";
// $i = 0;
// $j = 0;
echo "<table>";

for ($j=1;$j <= 12 ; $j ++){
	echo "<tr>";
	for ($i = 1; $i <= 12; $i++){
		echo "<th>".$i*$j."</th>";
	};
	echo "</tr>";
};

echo "</table>";

echo "<br>";

//$bar = "test";

function first(){
	global $bar;
	$bar = "hello";
}

function second(){
	global $bar;
	$bar = "goodbye";
}

first();
second();
echo $bar;

 ?>

