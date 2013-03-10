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

</p>
</body>
</html>
