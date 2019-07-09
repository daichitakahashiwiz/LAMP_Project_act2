<?php
/*!
@file u_unsubscribe.php
@brief 退会手続き説明画面(利用者画面)
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





/////////////////////////////////////////////////////////////////
/// 関数ブロック
/////////////////////////////////////////////////////////////////


//--------------------------------------------------------------------------------------
/*!
@brief  削除
@return なし
*/
//--------------------------------------------------------------------------------------
function deljob(){
    $chenge = new cchange_ex();
    if($_POST['param'] > 0){
        $chenge->delete("user","user_id=" . $_POST['param']);
    }
}

//データの削除
// function deljob(){
// 	$chenge = new cchange_ex();
// 	if($_POST['param'] > 0){
// 		$chenge->delete("prefecture","prefecture_id=" . $_POST['param']);
// 	}
// }








//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('admin/u_unsubscribe.tmpl');
?>