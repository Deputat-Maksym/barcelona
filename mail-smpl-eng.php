<?php

	header("Content-Type: text/html; charset=utf-8");

	if(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) === "xmlhttprequest") {

		if(!isset($_POST["name_client"]) || !isset($_POST["phone_number"]) || !isset($_POST["comments_text"]) || !isset($_POST["order_type"]) || !isset($_POST["form_name"])) {

			die();

		}

		function send_form_admin($send_form_admin) {

			$mail_to = "info@barcelonadriver.com";
			$subject = "Заявка с сайта barcelonadriver.com";
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			$headers .= "X-Priority: 1\r\n";
			$headers .= "X-MSMail-Priority: High\r\n";
			$headers .= "From: Система уведомлений <no-reply@".$_SERVER['HTTP_HOST'].">\r\n";

			mail($mail_to, $subject, $send_form_admin, $headers);

		}

		function send_form_user($send_form_user, $email_us) {

			$mail_to = $email_us;
			$subject = "Успешное оформление трансфера на barcelonadriver.com";
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			$headers .= "X-Priority: 1\r\n";
			$headers .= "X-MSMail-Priority: High\r\n";
			$headers .= "From: Система уведомлений <no-reply@".$_SERVER['HTTP_HOST'].">\r\n";

			mail($mail_to, $subject, $send_form_user, $headers);

		}

		$name_client = strip_tags($_POST["name_client"]);
		$phone_number = strip_tags($_POST["phone_number"]);
		$comments_text = strip_tags($_POST["comments_text"]);
		$order_type = strip_tags($_POST["order_type"]);
		$form_name = strip_tags($_POST["form_name"]);


		if($name_client == "" || $phone_number == "") {

			echo '<div style="padding-top: 15px;font-size: 20px;color: red">Не заполнены обязательные поля.</div><script>setTimeout(function() { $(".result").html(""); }, 4000);</script>';

			die();

		}

		$id_shop = file_get_contents("./pay_data_base/list_id.txt");
		$new_id = $id_shop + 1;
		file_put_contents("./pay_data_base/list_id.txt", $new_id);

		$send_form_admin = <<<HTML

			Здравствуйте администратор barcelonadriver.com.<br>
			Только что на вашем сайт был совершен заказ <b>#{$new_id}</b>.<br>
			<h2>Детали заказа</h2>
			
			<h3>ФОРМА - {$order_type}</h3>
			<i>Имя</i>: {$name_client}<br>
			<i>Телефон</i>: {$phone_number}<br>
			<i>Комментарий</i>: {$comments_text}<br>
			

HTML;

//		$send_form_user = <<<HTML
//
//			Здравствуйте <i>{$name_client}</i>!
//			Только что Вы оформили заказ <b>#{$new_id}</b> на нашем сайте, заполнив форму "{$order_type}"<br>
//			<h2>Детали заказа</h2>
//
//			<i>Имя</i>: {$name_client}<br>
//			<i>Телефон</i>: {$phone_number}<br>
//			<i>Комментарий</i>: {$comments_text}<br>
//
//			<br><br>
//			Это письмо сформировано автоматически и не требует ответа.<br>
//			Если Вы получили это уведомление по ошибке - то просто проигнорируйте его.<br><br>
//			Если у Вас остались вопросы, задать их можете через следующие контакты:<br><br>
//			<b>E-mail</b>:<br>
//			<b>Телефон</b>:<br>
//			<b>Viber</b>:<br>
//
//
//
//
//HTML;

		send_form_admin($send_form_admin);
//		send_form_user($send_form_user, $email_text);

		echo '<div style="padding: 15px;font-size: 20px;color: green">Ваше бронирование оформлено!<br>Наши менеджеры свяжутся с Вами для уточнения деталей поездки.</div><script>setTimeout(function() { document.forms["' . $form_name . '"].reset(); window.location.reload(); }, 10000);$("form[name=' . $form_name . ']").hide();</script>';

	} else {

		die();

	}

?>
