<?php
/*!
@file member_detail_smarty.php
@brief メンバー詳細(Smarty版)
@copyright Copyright (c) 2017 Yamanoi Yasushi.
*/

/////////////////////////////////////////////////////////////////
/// 実行ブロック
/////////////////////////////////////////////////////////////////

//ライブラリをインクルード
require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
//以下はセッション管理用のインクルード
require_once($CMS_COMMON_INCLUDE_DIR . "auth_adm.php");

$smarty->display('admin/login_update4.tmpl');
?>