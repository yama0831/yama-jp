<?php

	if(isset($_POST['user_name']) && isset($_POST['pass']))
	{
		if($_POST['user_name'] == "yama" && $_POST['pass'] == "123")
		{
			// ログイン成功
			$url = "/view/Portal.php";
			header("Location: $url");
		}
		else
		{
			// ログイン失敗
			echo "false";
		}
	}
	else
	{
		echo "入力してください。";
	}
