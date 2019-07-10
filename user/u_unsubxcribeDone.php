<?php
/*!
@file u_unsubxcribeDone.php
@brief 退会手続き完了画面(利用者画面)
@copyright Copyright (c) 2017 Yamanoi Yasushi.
@made 板倉
*/

/////////////////////////////////////////////////////////////////
/// 実行ブロック
/////////////////////////////////////////////////////////////////

//ライブラリをインクルード
require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");

session_start();
session_unset();
session_destroy();

//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('admin/u_unsubxcribeDone.tmpl');
?>