<?php
	require("template.php");

	$title = "Log In";
	$Content = include("login.html");

	$data = array(
				"title" => $title,
				"content" => $content
			);

	extract($data);

	echo $html;
