<html>
<head>
<meta charset="utf8"></meta>
<title>My First PHP Page</title>
</head>
<body>


<?php
//phpinfo();
echo "<p>";
echo "Helló szöveg!";
echo "</p>";
?>
<?php
for ($i =1; $i <11; $i++)
echo "<tr><td>$i</td></tr>";
?>

<p>
<?php
$cars = array("Volvo","BMW","Toyota","Trabant");
echo "I like " . $cars[0] . ", " . $cars[1] . " , " . $cars[2] . " and " . $cars[3] . ".";
echo "</br>";
print_r($cars);

$peter = 39;
$age=array("Peter"=>$peter,"Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo sizeof($cars);
echo "</br>";
echo "</br>";
date_default_timezone_set("Europe/Budapest");
echo (date("Y"."."."m"."."."d"." h:i:s"));
echo "</br>";

echo (gmdate("Y h:i:s") . "<br />");

$file = fopen('test.txt','w+');
fwrite($file,'Hello');
fclose($file);
unlink("test.txt");
?>


<?php
$array=array();                         //tomb feltoltese 
for($i=0; $i <5; $i++) {
		$array[$i] = $i;
		echo " " . $array[$i];
}
echo "<br>";

print_r(array_count_values($array));	//megszamolja az azonos elemek szamat
rsort($array);                         //tomb rendezes
$length=count($array);
for ($j=0; $j != $length; $j++){
		echo " " . $array[$j];
	}
	echo "<br>";
	$result = array_diff($cars,$array); 	//2 tomb osszehasonlitasa
	print_r($result);
	
	echo "<br>";
	
	$tomb=array();                         //ket dimenzios tomb feltoltese 
for($l=0; $l <5; $l++) {
	echo "<br>";
	for($k=0; $k <5; $k++) {
		$tomb[$l][$k] = $l+$k;
		echo " " . $tomb[$l][$k];
		
}}
echo "<br>";
$jd=cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));  //nap kiiratasa
echo(jddayofweek($jd,1));

if (error_get_last() == 0){
	
	echo "Nincs hiba a php script generálása során!!!";	
	}
	else {
		echo "<br> Hiba:   ";
print_r(error_get_last());
}

?> 

 

</p>
</body>
</html>
