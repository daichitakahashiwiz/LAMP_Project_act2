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
require_once($CMS_COMMON_INCLUDE_DIR . "auth_user.php");

// if(!isset($_POST['zyunbi01']))$_POST['zyunbi01'];
// $time = $_GET['zyunbi01'];
// setcookie('zyunbi01',serialize($times),time()+60*60*24*7);

// echo $_COOKIE['zyunbi01'];
$smarty->display('admin/u_check.tmpl');

?>