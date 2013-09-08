<?php
	require_once './DBManager.php';

	// DBオブジェクトの取得
	$db = getDb();

	// ★DBからユーザーID、パスワードを取得
	$result =  $db->query('SELECT * FROM M_USER');
	//$result =  $db->query('SELECT * FROM M_USER WHERE user_name = \'' . $_POST['user_name'] . '\'' );
	//$row = $result->fetch(PDO::FETCH_ASSOC);

	while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
		print($result['name']);
		print($result['password'].'<br>');
	}
?>
