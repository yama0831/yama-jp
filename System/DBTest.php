<?php
	require_once './DBManager.php';

	// DBオブジェクトの取得
	$db = getDb();

	// DBからユーザーID、パスワードを取得
	$result =  $db->query('SELECT * FROM M_USER');

	// 取得データを展開
	while($row = $result->fetch(PDO::FETCH_ASSOC)){
		print($row['name']);
		print($row['password'].'<br>');
	}
?>
