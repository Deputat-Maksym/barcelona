<?php

	if(!isset($_POST["mc_gross"]) || !isset($_POST["item_name"]) || !isset($_POST["custom"])) {

		die();

	}

	if($_POST["mc_gross"] == "" || $_POST["item_name"] == "" || $_POST["custom"] == "") {

		die();

	}

	$mc_gross = strip_tags($_POST["mc_gross"]);
	$item_name = strip_tags($_POST["item_name"]);
	$custom = strip_tags($_POST["custom"]);
	$custom = explode("||", $custom);

	$check_pay = file_get_contents("./pay_data_base/cache_pay/".$custom[0]."_pp_us_inf.txt");

	$check_pay = explode("|||", $check_pay);

	if(round(preg_replace("/[^0-9]/", "", $check_pay[1])) == round($mc_gross)) {


		if($custom[0] == "ru") { // На русском

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

		} else { // На английском

			function send_form_admin($send_form_admin) {

				$mail_to = "igorkapabarcelona@gmail.com";
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


		}


		$mail_us = file_get_contents("./pay_data_base/cache_mail/".$custom[0]."_pp_us.txt");
		$mail_ad = file_get_contents("./pay_data_base/cache_mail/".$custom[0]."_pp_ad.txt");

		send_form_admin($mail_ad);
		send_form_user($mail_us, $check_pay[0]);

		unlink("./pay_data_base/cache_pay/".$custom[0]."_pp_us_inf.txt");
		unlink("./pay_data_base/cache_mail/".$custom[0]."_pp_us.txt");
		unlink("./pay_data_base/cache_mail/".$custom[0]."_pp_ad.txt");

	}

?>
