<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php Урок. Задание 1</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>

	<?php
		$my_array = array("451° по Фаренгейту", "Шантарам", "1984", "Мастер и Маргарита", "Три товарища", "Портрет Дориана Грея", "Вино из одуванчиков", "Цветы для Элджернона", "Над пропастью во ржи", "Маленький принц", "Анна Каренина", "Сто лет одиночества", "Тень горы", "Атлант расправил плечи");
	?>
	<div class="wrapper">
		<h1>Список фильмов</h1>
		<ul>
			<?php 
			for ($i=0; $i < count($my_array); $i++) { 
				echo "<li>".$my_array[$i]."</li>";
			}
			
			?>			
		</ul>
	</div>
</body>
</html>