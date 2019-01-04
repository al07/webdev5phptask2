<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задание "книги"</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="wrapper">
		<h1>Список книг</h1>
		<?php 
		$books_array = array( "451° по Фаренгейту", "Рей Брэдбери", "Шантарам", "Грегори Дэвид Робертс", "1984", "Джордж Оруэлл", "Мастер и Маргарита", "Михаил Афанасьевич Булгаков", "Три товарища", "Эрих Мария Ремарк", "Портрет Дориана Грея", "Оскар Уайльд", "Вино из одуванчиков", "Рей Брэдбери", "Цветы для Элджернона", "Даниел Киз", "Над пропастью во ржи", "Джером Д. Сэлинджер", "Маленький принц", "Антуан де Сент-Экзюпери", "Анна Каренина", "Лев Толстой", "Сто лет одиночества", "Габриэль Гарсиа Маркес", "Тень горы", "Грегори Дэвид Робертс", "Атлант расправил плечи", "Айн Рэнд", );
		$author_book = array();
		for ($i=1; $i < count($books_array); $i+=2) {

			$author_book[ $books_array[$i] ][] = $books_array[$i-1];
		}
		foreach ($author_book as $author => $books) {
			
			foreach($books as $k => $cur_book) {
				echo '<div class="book_card">';
				echo '<div class="book_author">'.$author.'</div><div class="book_title">'.$cur_book.'</div>';
				echo "</div>";
			}
			
		};
		?>
	</div>
</body>
</html>