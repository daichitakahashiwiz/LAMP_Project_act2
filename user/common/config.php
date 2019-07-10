<?php
/*!
@file config.php
@brief DB接続変数と、エンコードの定義
@copyright Copyright (c) 2017 Yamanoi Yasushi.
*/
////////////////////////////////////
//実行ブロック
//データベースマネージメント
define('DB_RDBMS','mysql');
//MySQLの場合のキャラ設定にSET NAMESを使用するかどうか
define('DB_MYSQL_SET_NAMES','1');
//ホスト(ローカルの場合は'localhost'と記述)
define('DB_HOST','localhost');
//ユーザー
define('DB_USER','tmD2019db');
//パスワード
define('DB_PASS','Y9HlAdR5jMQ3cqzI');
//DB名
define('DB_NAME','tmD2019db');
//DBのキャラセット
define('DB_CHARSET','utf8');
//PHPのキャラセット
define('PHP_CHARSET','UTF-8');
//デバッグかどうか
define('DB_DEBUG_MODE','1');
//サイトのルートからのパス
define('SITE_BASE_URL','/~tmD2019/');
//デバッグでない場合のエラー時のリダイレクト先
define('DB_ERR_REDIRECT_URL',SITE_BASE_URL . 'errpage.php');

?>
