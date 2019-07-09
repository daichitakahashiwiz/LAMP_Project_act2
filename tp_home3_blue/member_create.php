<?php
/*!
@file admin_detail.php
@brief  管理者詳細(管理画面)
@copyright Copyright (c) 2017 Yamanoi Yasushi.
*/
require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");
//以下はセッション管理用のインクルード
require_once($CMS_COMMON_INCLUDE_DIR . "auth_adm.php");

$admin_master_id = 0;
$err_array = array();
$err_flag = 0;

if(isset($_GET['aid']) 
//cutilクラスのメンバ関数をスタティック呼出
	&& cutil::is_number($_GET['aid'])
	&& $_GET['aid'] > 0){
	$admin_master_id = $_GET['aid'];
}
//$_POST優先
if(isset($_POST['admin_master_id']) 
//cutilクラスのメンバ関数をスタティック呼出
	&& cutil::is_number($_POST['admin_master_id'])
	&& $_POST['admin_master_id'] > 0){
	$admin_master_id = $_POST['admin_master_id'];
}

//管理者クラスを構築
$admin_master_obj = new cadmin_master();
//配列に管理者を$_POSTに取り出す
//すでにPOSTされていたら、DBからは取り出さない

if(isset($_POST['func'])){
	switch($_POST['func']){
		case 'set':
		    if(!paramchk()){
		        $_POST['func'] = 'edit';
		        $err_flag = 1;
		    }
		    else{
		        regist();
		        //regist()内でリダイレクトするので
		        //ここまで実行されればリダイレクト失敗
		        $_POST['func'] = 'edit';
		        //システムに問題のあるエラー
		        $err_flag = 2;
		    }
		case 'conf':
			if(!paramchk()){
				$_POST['func'] = 'edit';
				$err_flag = 1;
			}
		break;
		case 'edit':
			//戻るボタン。
		break;
		default:
			//通常はありえない
			echo '原因不明のエラーです。';
			exit;
		break;
	}
}
else{
    if($admin_master_id > 0){
		if(($_POST = $admin_master_obj->get_tgt_id(false,$admin_master_id)) === false){
			$admin_master_id = 0;
			$_POST['func'] = 'new';
		}
		else{
			$_POST['enc_password_chk'] = $_POST['enc_password'];
			$_POST['func'] = 'edit';
		}
    }
    else{
		//新規の入力フォーム
		$_POST['func'] = 'new';
    }
}

//▲▲▲▲▲▲実行ブロック▲▲▲▲▲▲
//▼▼▼▼▼▼関数ブロック▼▼▼▼▼▼

//--------------------------------------------------------------------------------------
/*!
@brief  エラー存在のアサイン
@return なし
*/
//--------------------------------------------------------------------------------------
function assign_err_flag(){
	//$smartyをグローバル宣言（必須）
	global $smarty;
	global $err_flag;
	$str = '';
	switch($err_flag){
		case 1:
		$str =<<<END_BLOCK

入力エラーがあります。各項目のエラーを確認してください。
END_BLOCK;
		break;
		case 2:
		$str =<<<END_BLOCK

更新に失敗しました。サポートを確認下さい。
END_BLOCK;
		break;
	}
	$smarty->assign('err_flag',$str);
}

//--------------------------------------------------------------------------------------
/*!
@brief  パラメータのチェック
@return エラーの場合はfalseを返す
*/
//--------------------------------------------------------------------------------------
function paramchk(){
	global $err_array;
	global $admin_master_id;
	$retflg = true;
////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'user_name','名前','isset_nl')){
		$retflg = false;
	}
////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'user_name_kana','名前(カナ)','isset_nl')){
		$retflg = false;
	}
////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'prefecture_id','都道府県','isset_num_more0')){
		$retflg = false;
	}
////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'mail_address1','メールアドレス1','isset_mail')){
		$retflg = false;
	}
	////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'mail_address2','メールアドレス2','isset_mail')){
		$retflg = false;
	}
////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'birthday','生年月日','isset_mail')){
		$retflg = false;
	}
////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'address_number','郵便番号','isset_num')){
		$retflg = false;
	}
////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'address1','住所1','isset_nl')){
		$retflg = false;
	}
////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'address2','住所2','isset')){
		$retflg = false;
	}
// ////////////////////////////////////////////////////////////
// 	if(ccontentsutil::chkset_err_field($err_array,'member_gender','性別','isset_pass')){
// 		$retflg = false;
// 	}
////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'phone_number1','電話番号1','isset_num_range')){
		$retflg = false;
	}
////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'phone_number2','電話番号2','isset_tel')){
		$retflg = false;
	}
////////////////////////////////////////////////////////////
	if(ccontentsutil::chkset_err_field($err_array,'passward','パスワード','isset_pass')){
		$retflg = false;
	}
// ////////////////////////////////////////////////////////////
// 	if(ccontentsutil::chkset_err_field($err_array,'employee_ID','割当従業員','isset_pass')){
// 		$retflg = false;
// 	}
// ////////////////////////////////////////////////////////////
// 	if(ccontentsutil::chkset_err_field($err_array,'account_state','アカウント状態','isset_pass')){
// 		$retflg = false;
// 	}
////////////////////////////////////////////////////////////

	else if($_POST['passward'] != $_POST['passward_sai']){
		$err_array['passward_sai'] = "「パスワード確認」が「パスワード」と違っています。";
		$retflg = false;
	}
	return $retflg;
}

//--------------------------------------------------------------------------------------
/*!
@brief  管理者データの追加／更新。保存後自分自身を再読み込みする。
@return なし
*/
//--------------------------------------------------------------------------------------
function regist(){
    global $admin_master_id;
    //パスワードが変更さえているかを確認する
    if($admin_master_id > 0){
        $obj = new cadmin_master();
        $arr = $obj->get_tgt_id(false,$admin_master_id);
        if($arr['passward'] != $_POST['passward']){
            //変更された
            $_POST['passward'] = cutil::pw_encode($_POST['passward']);
        }
    }
    else{
        //新規
        $_POST['passward'] = cutil::pw_encode($_POST['passward']);
    }
    $dataarr = array();
    $dataarr['admin_login'] = (string)$_POST['admin_login'];
    $dataarr['admin_name'] = (string)$_POST['admin_name'];
    $dataarr['enc_password'] = (string)$_POST['enc_password'];
    $chenge = new cchange_ex();
    if($admin_master_id > 0){
        $chenge->update('admin_master',$dataarr,'admin_master_id=' . $admin_master_id);
        cutil::redirect_exit($_SERVER['PHP_SELF'] . '?aid=' . $admin_master_id);
    }
    else{
        $aid = $chenge->insert('admin_master',$dataarr);
        cutil::redirect_exit($_SERVER['PHP_SELF'] . '?aid=' . $aid);
    }
}

//--------------------------------------------------------------------------------------
/*!
@brief  管理者IDのアサイン
@return なし
*/
//--------------------------------------------------------------------------------------
function assign_admin_master_id(){
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $admin_master_id;
    $smarty->assign('user_id',$admin_master_id);
}

//--------------------------------------------------------------------------------------
/*!
@brief  管理者IDのアサイン(新規の場合は「新規」)
@return なし
*/
//--------------------------------------------------------------------------------------
function assign_admin_master_id_txt(){
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $admin_master_id;
    if($admin_master_id <= 0){
        $smarty->assign('user_id_txt','新規');
    }
    else{
        $smarty->assign('user_id_txt',$admin_master_id);
    }
}



/////////////////////////////////////////////////////////////////
/// 関数呼び出しブロック
/////////////////////////////////////////////////////////////////
if(!isset($_POST['user_name']))$_POST['user_name'] = '';
if(!isset($_POST['user_name_kana']))$_POST['user_name_kana'] = '';
if(!isset($_POST['prefecture_id']))$_POST['prefecture_id'] = '';
if(!isset($_POST['mail_address1']))$_POST['mail_address1'] = '';
if(!isset($_POST['mail_address2']))$_POST['mail_address2'] = '';
if(!isset($_POST['birthday']))$_POST['birthday'] = '';
if(!isset($_POST['address_number']))$_POST['address_number'] = '';
if(!isset($_POST['address1']))$_POST['address1'] = '';
if(!isset($_POST['address2']))$_POST['address2'] = '';
if(!isset($_POST['phone_number1']))$_POST['phone_number1'] = '';
if(!isset($_POST['phone_number2']))$_POST['phone_number2'] = '';
if(!isset($_POST['passward']))$_POST['pasward'] = '';
assign_err_flag();
assign_admin_master_id();
assign_admin_master_id_txt();
$smarty->assign('err_array',$err_array);

//Smartyを使用した表示(テンプレートファイルの指定)
if(isset($_POST['func']) && $_POST['func'] == 'conf'){
    $button = '更新';
    if($admin_master_id <= 0){
        $button = '追加';
    }
    $smarty->assign('button',$button);
    $smarty->display('admin/member_create_confirmation.tmpl');
}
else{
    $smarty->display('admin/member_create.tmpl');
}
?>