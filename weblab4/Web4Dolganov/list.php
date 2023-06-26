<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php 
	$file = simplexml_load_file("basa.xml");
	$file->formatOutput = true;
	$k = count($file->card);
	$id = 1;
	$p = 1;
	while($p <= $k){
		foreach($file as $card){
			if ($id == $card->id){
				$name = $card->name;	
				echo "<a href='http://localhost/web/index.php?id=$id'> $name </a><br>";
				$p = $p+1;
				break;
			}
		}
		$id = $id + 1;
	}

?>



	<a href="http://localhost/web/create.php">Ссылка на create</a>
</body>
</html>