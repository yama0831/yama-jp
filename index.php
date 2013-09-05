<?php

	$title = "Log In";
	$style = "id=\"public\" class=\"login\" data-twttr-rendered=\"true\"";
	$Content = file_get_contents("./view/login.php");

	ob_start();
	require("./view/template.php");
	$html = ob_get_clean();

	echo $html;
