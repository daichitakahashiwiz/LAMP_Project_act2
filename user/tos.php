<?php
/*!
@file tos.php
@brief 退会手続き完了画面(利用者画面)
@copyright Copyright (c) 2017 igariyuta.
@made 板倉
*/

/////////////////////////////////////////////////////////////////
/// 実行ブロック
/////////////////////////////////////////////////////////////////

//ライブラリをインクルード
require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
//以下はセッション管理用のインクルード
require_once($CMS_COMMON_INCLUDE_DIR . "auth_user.php");



//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('admin/tos.tmpl');
?>