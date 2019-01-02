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
	if ($day_id < 6) {
		$message .= "Хорошего Вам продуктивного дня!";
	} else {
		$message .= "Хорошо Вам отдохнуть";
	}
	echo $message;
}
day_of_the_week("Саша", 3);
		?>
		</div>
	</div>
</body>
</html>