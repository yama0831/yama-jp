<?php
/**************************
 * ログ出力クラス
 **************************/
	class Logger
	{
		public static function log_error($messa)
		{
			// 日付取得
			$date = date("Y/m/d H:i:s ");
			// IPアドレス取得
			$ip = $_SERVER['REMOTE_ADDR'];
			$text = $date . "$ip " . "error : " . $messa . "\n";

			// ログ出力
			error_log($text, 3, '/home/seigyo/www/log/e_log.log');
		}
	}
?>