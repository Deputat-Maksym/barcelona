<?php

	header("Content-Type: text/html; charset=utf-8");

	if(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) === "xmlhttprequest") {

		if(!isset($_POST["number_text"]) || !isset($_POST["data_text_1"]) || !isset($_POST["time_text_1"]) || !isset($_POST["sitebg"]) || !isset($_POST["place_text_1"]) || !isset($_POST["passanger"]) || !isset($_POST["stuff"]) || !isset($_POST["nump_priv"]) || !isset($_POST["sitebg2"]) || !isset($_POST["place_text_2"]) || !isset($_POST["data_text_2"]) || !isset($_POST["time_text_2"]) || !isset($_POST["name_text"]) || !isset($_POST["lastname_text"]) || !isset($_POST["phone_text"]) || !isset($_POST["email_text"]) || !isset($_POST["st"]) || !isset($_POST["en"]) || !isset($_POST["price_transf"]) || !isset($_POST["car_name"]) || !isset($_POST["itog"]) || !isset($_POST["dle_hash"])) {

			die();

		}

		$number_text = strip_tags($_POST["number_text"]);
		$data_text_1 = strip_tags($_POST["data_text_1"]);
		$time_text_1 = strip_tags($_POST["time_text_1"]);
		$sitebg = strip_tags($_POST["sitebg"]);
		$place_text_1 = strip_tags($_POST["place_text_1"]);
		$passanger = strip_tags($_POST["passanger"]);
		$stuff = strip_tags($_POST["stuff"]);
		$nump_priv = strip_tags($_POST["nump_priv"]);
		$sitebg2 = strip_tags($_POST["sitebg2"]);
		$place_text_2 = strip_tags($_POST["place_text_2"]);
		$data_text_2 = strip_tags($_POST["data_text_2"]);
		$time_text_2 = strip_tags($_POST["time_text_2"]);
		$name_text = strip_tags($_POST["name_text"]);
		$lastname_text = strip_tags($_POST["lastname_text"]);
		$phone_text = strip_tags($_POST["phone_text"]);
		$email_text = strip_tags($_POST["email_text"]);
		$st = strip_tags($_POST["st"]);
		$en = strip_tags($_POST["en"]);
		$price_transf = strip_tags($_POST["price_transf"]);
		$car_name = strip_tags($_POST["car_name"]);
		$itog = strip_tags($_POST["itog"]);
		$dle_hash = strip_tags($_POST["dle_hash"]);

		if(!preg_match("|^([a-z0-9_.-]{1,20})@([a-z0-9.-]{1,20}).([a-z]{2,4})|is", strtolower($email_text))) {

			echo '<div style="padding-top: 15px;font-size: 20px;color: red">E-mail is not specified correctly.</div><script>setTimeout(function() { $(".result").html(""); }, 4000);</script>';

			die();

		}

		if($data_text_1 == "" || $time_text_1 == "" || $sitebg == "" || $place_text_1 == "" || $passanger == "" || $stuff == "" || $nump_priv == "" || $name_text == "" || $lastname_text == "" || $phone_text == "" || $st == "" || $en == "" || $price_transf == "" || $car_name == "" || $itog == "") {

			echo '<div style="padding-top: 15px;font-size: 20px;color: red">The mandatory fields are not filled in.</div><script>setTimeout(function() { $(".result").html(""); }, 4000);</script>';

			die();

		}

		if($passanger < 1) {

			echo '<div style="padding-top: 15px;font-size: 20px;color: red">Specify the actual number of passengers.</div><script>setTimeout(function() { $(".result").html(""); }, 4000);</script>';

			die();

		}

		if($dle_hash == "") {

			echo '<div style="padding-top: 15px;font-size: 20px;color: red">There\'s been an order placement error. Please try again later, change the type of payment or contact our technical support.</div><script>setTimeout(function() { $(".result").html(""); }, 4000);</script>';

			die();

		}

		if($sitebg2) {

			if($place_text_2 == "" || $data_text_2 == "" || $time_text_2 == "" ) {

				echo '<div style="padding-top: 15px;font-size: 20px;color: red">The data on the return transfer are not filled in.</div><script>setTimeout(function() { $(".result").html(""); }, 4000);</script>';

				die();

			}

			$sitebg_2 = <<<HTML

				<i>Place of departure</i>: {$place_text_2}<br>
				<i>Departure time</i>: {$data_text_2} в {$time_text_2}<br>
				<i>Price</i>: {$price_transf}<br>

HTML;

		} else {

			$sitebg_2 = "Not in use";

		}

		if(($sitebg != "" && $sitebg != "0")|| ($nump_priv != "" && $nump_priv != "0")) {

			$title = "<h2>Additional information</h2>";

		} else {

			$title = "";

		}

		if($sitebg != "" && $sitebg != "0") {

			$sitebg_d = "<i>Extra waiting hour</i>: ".$sitebg."€";

		} else {

			$sitebg_d = "";

		}

		if($nump_priv != "" && $nump_priv != "0") {

			$nump_priv_1 = "<br><i>Extra stop</i>: ".$nump_priv." (".($nump_priv * 10)."€)";

		} else {

			$nump_priv_1 = "";

		}

		$id_shop = file_get_contents("./pay_data_base/list_id.txt");
		$new_id = $id_shop + 1;
		file_put_contents("./pay_data_base/list_id.txt", $new_id);

		$send_form_admin = <<<HTML

			Hello, Barcelonadriver.com administrator.<br>
			The order was just made on your site. <b>#{$new_id}</b>.<br>
			<h2>Order details</h2>

			<i>Name and surname</i>: {$name_text} {$lastname_text}<br>
			<i>E-mail</i>: {$email_text}<br>
			<i>Phone</i>: {$phone_text}<br>
			<i>Flight number</i>: {$number_text}<br>
			<i>Number of passengers, including children and infants</i>: {$passanger}<br>
			<i>Luggage quantity</i>: {$stuff}<br>
			<i>Destination</i>: {$place_text_1}<br>
			<i>Direction</i>: {$st} - {$en}<br>
			<i>Departure time</i>: {$data_text_1} в {$time_text_1}<br>
			<i>Car</i>: {$car_name} ($price_transf)<br>
			
			<h2>Return transfer</h2>
			{$sitebg_2}
			
			{$title}
			{$sitebg_d}
			{$nump_priv_1}
			
			<h2>Sum total</h2>

			{$itog}
			
			<h2>Payment type</h2>

			Online payment.<br>
			Status: <span style="color: green">Paid</span>

HTML;

		$send_form_user = <<<HTML

			Hello <i>{$name_text}</i>!
			You have just placed an order <b>#{$new_id}</b> on our website.<br>
			<h2>Order details</h2>

			<i>Name and surname</i>: {$name_text} {$lastname_text}<br>
			<i>E-mail</i>: {$email_text}<br>
			<i>Phone</i>: {$phone_text}<br>
			<i>Flight number</i>: {$number_text}<br>
			<i>Number of passengers, including children and infants</i>: {$passanger}<br>
			<i>Luggage quantity</i>: {$stuff}<br>
			<i>Destination</i>: {$place_text_1}<br>
			<i>Direction</i>: {$st} - {$en}<br>
			<i>Departure time</i>: {$data_text_1} в {$time_text_1}<br>
			<i>Car</i>: {$car_name} ($price_transf)<br>
			
			<h2>Return transfer</h2>
			{$sitebg_2}
			
			{$title}
			{$sitebg_d}
			{$nump_priv_1}
			
			<h2>Sum total</h2>

			{$itog}
			
			<h2>Payment type</h2>

			Online payment.<br>
			Status: <spam style="color: green">Paid</span>

			<br><br>
			This letter is generated automatically and does not require a reply.<br>
			If you have received this notification by mistake, just ignore it.<br><br>
			If you still have questions, you can ask them through the following contacts:<br><br>
			<b>E-mail</b>:<br>
			<b>Phone</b>:<br>
			<b>Viber</b>:<br>

HTML;

		file_put_contents("./pay_data_base/cache_mail/".$dle_hash."_pp_us.txt", $send_form_user);
		file_put_contents("./pay_data_base/cache_mail/".$dle_hash."_pp_ad.txt", $send_form_admin);
		file_put_contents("./pay_data_base/cache_pay/".$dle_hash."_pp_us_inf.txt", $email_text."|||".$itog);

		echo '<script>$(\'form[action="https://www.paypal.com/cgi-bin/webscr"]\').submit();</script>';

	} else {

		die();

	}

?>
