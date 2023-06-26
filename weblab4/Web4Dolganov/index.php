
<?php 
	$file = simplexml_load_file("basa.xml");
	$file->formatOutput = true;
	$id = $_GET['id'];
	foreach($file as $card){
		if ($id == $card->id){
			$name = $card->name;
			$cost = $card->cost;
			$info = $card->info;
			break;
		}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p> <?php echo($name) ?> </p>
	<p> <?php echo($cost) ?> </p>
	<p> <?php echo($info) ?> </p>

	<a href="http://localhost/web/list.php"> Ссылка на list</a>
	<a href="http://localhost/web/delete.php?id=<?php echo($id)?>"> Ссылка на delete</a>
	<a href="http://localhost/web/update.php?id=<?php echo($id)?>"> Ссылка на update</a>
</body>
</html>