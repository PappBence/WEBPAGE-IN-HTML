<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" ></meta>
<title>PHP Page</title>
</head>
<body>

<?php

$tomb = array("Csaba","Dávid","Pisti");
foreach($tomb as $nev)  {
	
	$txt = "Kedves ";
	$txt .= "$nev". "!" ."<br>";
	$txt .= "blabla" . "<br>";
	echo $txt;
	}

?>



<?php
$link = mysqli_connect('localhost', 'root', 'root','test');
$link -> set_charset("utf8");
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
echo "<br>";


$result = mysqli_query($link,"SELECT * FROM nevek");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysqli_fetch_row($result);
	
//$charset = mysqli_client_encoding($link);

//echo "The current character set is: $charset\n";

echo $row[0];

mysql_close($result);

$file = "text.txt";
echo "<br>";

echo strrchr("$file",".");

$hossz = strlen($file);
echo "<br>";
echo "Kiterjesztes:";

echo substr("$file",$hossz- 4);
echo "File nev:";
echo substr("$file",0,$hossz-4);


?>


</body>
</html>

