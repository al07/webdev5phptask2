<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задание "День недели"</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="wrapper">
		<h1>День недели</h1>
		<div class="message">
		<?php 
function day_of_the_week($name, $day_id) {
	$message = "Здравствуйте, $name! ";
	switch ($day_id) {
		case 1:
			$message .= "Хорошего Вам продуктивного дня!";
			break;
		case 2:
			$message .= "Хорошего Вам продуктивного дня!";
			break;
		case 3:
			$message .= "Хорошего Вам продуктивного дня!";
			break;
		case $day_id < 6:
			$message .= "Хорошего Вам продуктивного дня!";
			break;
		case 5:
			$message .= "Хорошего Вам продуктивного дня!";
			break;
		case 6:
			$message .= "Хорошего Вам продуктивного дня!";
			break;
		case 7:
			$message .= "Хорошо Вам отдохнуть";
			break;
		default:
			$message .= "Странный порядковый номер дня";
			break;
	}
	echo $message;
}
day_of_the_week("Саша", 7);
		?>
		</div>
	</div>
</body>
</html>