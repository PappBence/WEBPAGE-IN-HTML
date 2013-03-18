<html>
<head>
<meta charset="utf8"></meta>
<title>MYSQLi PHP Page</title>
</head>
<body>
<?php

//Variables
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';                             
$dbdb = 'tester';
$staff_var = 'staff2';
$dbtable = 'staff';
                              
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbdb);
																																	// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

																																// Create database
/*$sql1="CREATE DATABASE tester";
if (mysqli_query($con,$sql1))
  {
  echo "Database tester created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error();
  }
 */ 
																															  // Create table
/*$sql2="CREATE TABLE persons(Firstname CHAR(30),Lastname CHAR(30),Age INT)";

// Execute query
if (mysqli_query($con,$sql2))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error();
  }
*/

/*


$sql3 ="CREATE TABLE $staff_var (

ID INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(ID),
Firstname CHAR(30),
Age INT
)";

//Execute
if (mysqli_query($con,$sql3))
	{
		echo "Table $staff_var created successfully!!!";
	}
else {
	echo "Error creating table: " . mysqli_error();
	}
*/

/*$sql4 = "DROP TABLE $staff_var";																					//Delete table
//Execute
if (mysqli_query($con,$sql4))
	{
		echo "Table $staff_var deleted successfully!!!";
	}
else {
	echo "Error deleting table: " . mysqli_error();
	}
*/	

/*$sql5 = "DROP DATABASE $dbdb"; 																						//Delete database
if (mysqli_query($con,$sql5))
	{
		echo "Database $dbdb deleted successfully!!!";
	}
else {
	echo "Error deleting database " . mysqli_error();
	}

*/
																																			//Insert data
/*$result = "INSERT INTO $dbtable (ID,Age,Firstname) VALUES (null,25,'Teszt Elek')"; 								// kulcsmezot automatikusan inkrementalja 
mysqli_query($con,$result); 
*/

/*$sql6 = "SELECT * FROM staff";																							//Select data
$result = mysqli_query($con,$sql6);
if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($result))
{
	echo  "Tutorial ID :{$row['ID']}  <br> ".
         "Firstname: {$row['Firstname']} <br> ".
         "Age: {$row['Age']} <br> ".
         "--------------------------------<br>";
}
*/

/*$sql7 = "UPDATE staff SET Firstname='Bela' WHERE ID=1";														//Update data


$result = mysqli_query($con,$sql7);
if(! $result )
{
  die('Could not update data: ' . mysql_error());
}

echo "Succesfull <br>";
*/





/*Header-es átirányítás:
php file: //ne legyen előtte semmi!!!
<?php
	$in = @imagecreatefromjpeg("ide írjuk a kép nevét");
	header('Content-type: image/jpg');
	imagejpeg($in);
	imagedestroy($in);
	die();
?>
*/


if (error_get_last() == 0){
	
	echo "Nincs hiba a php script generálása során!!!";	
	}
	else {
		echo "<br> Hiba:   ";
print_r(error_get_last());
}

mysql_close($con);

?>




</body>
</html>