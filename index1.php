<html>
<body>

<?php
class PostOffice{

	public function mailFiler()
	{
		$file = fopen("string.txt", "r");

// Read the file line by line until the end
		while (!feof($file)) {

			$value = fgets($file);
			echo $value."<br>";
		}
		fclose($file);
	}

	public function mailRegex()
	{
		$file = fopen("string.txt", "r");

// Read the file line by line until the end
		while (!feof($file)) {
			$value = fscanf($file,%c);
			if(preg_match('/^([.0-9a-z]+)$/',$value) == false ) 
			{
	        	echo $value."<br>";
	    	}
    	}
    	fclose($file);
	}

	public spiltroad()
	{
		$file = fopen("road.txt", "r");

// Read the file line by line until the end
		while (!feof($file)) {

			$value = fgets($file);
			echo $value."<br>";
		}
		fclose($file);
	}
}

$a=new PostOffice;
$a -> mailRegex();



?>


</body>
</html>