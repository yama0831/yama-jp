<?php
	require_once './System/DBManager';

	try {
		// ★今のとこおまじない
		session_start();

		// DBへ接続
		$db = getDb();

		if(isset($_POST['user_name']) && isset($_POST['pass']))
		{
			// ★DBからユーザーID、パスワードを取得
			//$result = $db->query('SELECT * FROM M_USER WHERE del_flg = 0 AND name = \' . $_POST['user_name'] . '\'');
			$result = $db->query('SELECT * FROM M_USER WHERE del_flg = 0');
			$row = $result->fetch(PDO::FETCH_ASSOC);

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
	catch(Exception $ex)
	{
		throw $ex;
	}
?>