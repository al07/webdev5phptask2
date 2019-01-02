<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Задание "Отправка почты"</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="wrapper">
		
		<h1>Отправь письмо Деду Морозу!</h1>
		<div class="form_block">
			<form action="mail_form.php" method="post">
				<input type="text" name="usName" placeholder="Ваше имя">
				<input type="text" name="usEmail" placeholder="Ваша почта">
				<textarea name="usMessage" id="" cols="30" rows="10" placeholder="Ваше письмо"></textarea>
				<input type="submit" value="Отправить">
			</form>
		</div>
		<?php 
		
		if( !empty($_POST) ) {
			$message = "The message from website: \n " 
			. "From: " . $_POST['usName'] . "\n"
			. "Email: " .  $_POST['usEmail'] . "\n"
			. "Message: \n  " . $_POST['usMessage'];

			$headers = "From: info@test.mysite";

			$resultMail = mail("alexandershipilo@gmail.com", "Message from website", $message, $headers);
			if ( $resultMail ) {
				echo "<div class=\"res_message\">";
				echo "Письмо успешно отправлено!";
				echo "</div>";
			} else {
				echo "<div class=\"res_message bad_news\">";
				echo "Письмо не отправлено.";
				echo "</div>";
				
			}
			
		}
		?>
	</div>
</body>
</html>