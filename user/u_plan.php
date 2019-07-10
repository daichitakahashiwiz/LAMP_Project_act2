<?php
/*!
@file u_pass.php
@brief パスワード変更画面(利用者画面)
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
//以下はセッション管理用のインクルード
require_once($CMS_COMMON_INCLUDE_DIR . "auth_user.php");



//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('admin/u_plan.tmpl');
?>