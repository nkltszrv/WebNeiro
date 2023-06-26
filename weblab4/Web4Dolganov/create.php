<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST["name"];
		$cost = $_POST["cost"];
		$info = $_POST["info"];
		$errors = 0;
		$file = simplexml_load_file("basa.xml");
		if(empty($_POST["name"])){
			echo("Пожалуйста, введите название товара <br>");
			$errors += 1;
		}else{
			foreach($file as $card){
				if($name == $card->name){
					echo("Товар с таким названием уже существует. Пожалуйста, введите другое название (можете добавить свой бренд в описаение товара)<br>");
					$errors += 1;
					break;
				}
			}
		}
		if(empty($_POST["cost"])){
			echo("Ценник не может быть пустым. Пожалуйста, добавьте цену вашего товара <br>");
			$errors += 1;
		}
		if(empty($_POST["info"])){
			echo("Пожалуйста, заполните поле информации, чтобы покупатели могли лучше выбирать товары<br>");
			$errors += 1;
		}



		if($errors == 0){
			$card = $file->addChild('card');
			$id = 0;
			$card->addChild("id", $id);
			foreach($file as $card){
				if((int)$id < (int)$card->id){		
				$id = $card->id;
				echo($id);
				}
			}
			$id +=1;
			$card->id = $id;
			$card->addChild("name", $name);
			$card->addChild("cost", $cost);
			$card->addChild("info", $info);
			$file->asXML("basa.xml");
			header("Location: http://localhost/web/index.php?id=$id");
	}
	$errors = 0;
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
	<form method="POST" action="create.php">
		<label for="login">Название товара:</label>
      <input type="text" name="name" id='name'><br>
		<label for="login">Цена:</label>
      <input type="text" name="cost" id='cost'><br>
		<label for="login">Описание:</label>
      <input type="text" name="info" id='info'><br>
		<div class="btn">
         <input type="submit" value="Опубликовать новую товарную карточку" name="registr">
      </div>
	</form>
	<a href="http://localhost/web/list.php">На список</a>
</body>
</html>