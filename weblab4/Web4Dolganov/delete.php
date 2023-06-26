<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="POST">

	<div class="btn">
		<?php
			$id = $_GET['id'];
			if (isset($_POST['list'])) {
				header("Location: http://localhost/web/list.php");
			}
			if (isset($_POST['delete'])) {
				$file = simplexml_load_file("basa.xml");
				$maxId = count($file->card);
				foreach($file as $card){
					if($card->id == $id){
						$dom = dom_import_simplexml($card);
						$dom->parentNode->removeChild($dom);
						$file->asXML("basa.xml");
						echo ("<div class='question success'>Страница товара успешно удалена!</div>");
						break;     
					}
				}
			}
			if (isset($_POST['back'])){
				header("Location: http://localhost/web/index.php?id=$id");
			}
		
		
         if (isset($_POST['delete'])) {
            echo('<input type="submit" value="Войти" name="list">');
         } else {
            echo ('<input type="submit" value="Удалить" name="delete">');
            echo ('<input type="submit" value="Вернуться" name="back">');
         }
      ?>
   </form>	
</body>
</html>