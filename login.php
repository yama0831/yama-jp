<?php
	require_once './System/DBManager';

	// ★今のとこおまじない
	session_start();

	// DBへ接続
	$db = getDb();

	try {

		// ★DBからユーザーID、パスワードを取得
		$result =  $db->query('SELECT * FROM M_USER');
		//$result =  $db->query('SELECT * FROM M_USER WHERE user_name = \'' . $_POST['user_name'] . '\'' );
		$row = $result->fetch(PDO::FETCH_ASSOC);

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

	}
	catch(Exception $e)
	{
		die("YamaError：{$e->getMessage()}");
	}

?>
