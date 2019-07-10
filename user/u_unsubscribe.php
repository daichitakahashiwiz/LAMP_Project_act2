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

$show_mode = '';
$ERR_STR = '';

if(is_func_active()){
    // print_r ($_POST["func"]);
    if(param_chk()){
        switch($_POST['func']){
            case "del":
                $show_mode = 'del';
                //削除操作
                deljob();

                // //再読み込みのためにリダイレクト
                cutil::redirect_exit('u_unsubxcribeDone.php');
            break;
            default:
            break;
        }
    }
}
$show_mode = 'edit';
//データの読み込み
// readdata();



/////////////////////////////////////////////////////////////////
/// 関数ブロック
/////////////////////////////////////////////////////////////////

//--------------------------------------------------------------------------------------
/*!
@brief	コマンドが渡されたかどうか
@return	渡されたらtrue
*/
//--------------------------------------------------------------------------------------
function is_func_active(){
    if(isset($_POST['func']) && $_POST['func'] != ""){
        return true;
    }
    return false;
}

//--------------------------------------------------------------------------------------
/*!
@brief	パラメータのチェック
@return	エラーがあったらfalse
*/
//--------------------------------------------------------------------------------------
function param_chk(){
	 global $ERR_STR;
	if(!isset($_POST['param']) 
	|| !cutil::is_number($_POST['param'])
	|| $_POST['param'] <= 0){
		$ERR_STR .= "パラメータを取得できませんでした\n";
		return false;
	}
	return true;
}

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





//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('admin/u_unsubscribe.tmpl');
?>