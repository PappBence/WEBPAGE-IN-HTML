<?php
	if(isset($_GET["menu"]) and $_GET["menu"] != "")
		{
		$file = $_GET["menu"] . ".php";
		echo $file;
		}

	if(file_exists($file))
		{
			include($file);
		
		}
		
		else 
			{
				include("content1.php");
			}
?>
