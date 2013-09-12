<?php
	require_once './System/Logger.php';

	try
	{
		$title = "Log In";
		$style = "id=\"public\" class=\"login\" data-twttr-rendered=\"true\"";
		$Content = file_get_contents("./view/login.php");

		ob_start();
		require("./view/template.php");
		$html = ob_get_clean();
	}
	catch(Exception $ex)
	{
		// ログ出力
		Logger::log_error("fatal error");
	}

	// HTML出力
	echo $html;
?>