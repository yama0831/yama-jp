<?php

	function getDb()
	{
		$dsn = 'mysql:dbname=seigyo_yama; host=mysql474.db.sakura.ne.jp';
		$user = 'seigyo';
		$pass = 'seigyo0831';

		try
		{
			// DBへ接続を確立
			$db = new PDO($dsn, $user, $pass);
			//print '接続に成功しました。';

			// 文字コードを明示
			$db->exec('SET NAMES utf8');
		}
		catch(PDOException $e)
		{
			die("接続エラー: {$e->getMessage()}");
		}

		return $db;
	}
?>