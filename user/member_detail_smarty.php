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


$member_id = 0;
$err_array = array();
$err_flag = 0;

$page = 0;
if(isset($_GET['page']) 
    && cutil::is_number($_GET['page'])
    && $_GET['page'] > 0){
    $page = $_GET['page'];
}

if(isset($_GET['mid']) 
//cutilクラスのメンバ関数をスタティック呼出
    && cutil::is_number($_GET['mid'])
    && $_GET['mid'] > 0){
    $member_id = $_GET['mid'];
}
//$_POST優先
if(isset($_POST['member_id']) 
//cutilクラスのメンバ関数をスタティック呼出
    && cutil::is_number($_POST['member_id'])
    && $_POST['member_id'] > 0){
    $member_id = $_POST['member_id'];
}
//メンバークラスを構築
$member_obj = new cuser();
//配列にメンバーを$_POSTに取り出す
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
    if($member_id > 0){
        if(($_POST = $member_obj->get_tgt(false,$member_id)) === false){
            $_POST['func'] = 'new';
        }
         else{
        //     $_POST['fruits'] = $member_obj->get_all_fruits_match(false,$member_id);
             $_POST['func'] = 'edit';
         }
    }
    else{
        //新規の入力フォーム
        $_POST['func'] = 'new';
    }
}

/////////////////////////////////////////////////////////////////
/// 関数ブロック
/////////////////////////////////////////////////////////////////


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

<p class="red">入力エラーがあります。各項目のエラーを確認してください。</p>
END_BLOCK;
        break;
        case 2:
        $str =<<<END_BLOCK

<p class="red">更新に失敗しました。サポートを確認下さい。</p>
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
    $retflg = true;
    /// contents_func.phpの13行目のクラスを呼び出してる
    /// chkset_err_fieldは127行目
    /// メンバー名の存在と空白チェック
    if(ccontentsutil::chkset_err_field($err_array,'user_name','メンバー名','isset_nl')){
        $retflg = false;
    }
    /// メンバーの都道府県チェック
    if(ccontentsutil::chkset_err_field($err_array,'prefecture_id','都道府県','isset_num_range',1,47)){
        $retflg = false;
    }
    /// メンバー住所の存在と空白チェック
    if(ccontentsutil::chkset_err_field($err_array,'address1','市区郡町村以下','isset_nl')){
        $retflg = false;
    }
    /// メンバーの性別チェック
    if(ccontentsutil::chkset_err_field($err_array,'member_gender','性別','isset_num_range',1,2)){
        $retflg = false;
    }

    return $retflg;
}

//--------------------------------------------------------------------------------------
/*!
@brief  フルーツデータの追加／更新
@return なし
*/
//--------------------------------------------------------------------------------------
// function regist_fruits($member_id){
//     $chenge = new cchange_ex();
//     $chenge->delete("fruits_match","member_id=" . $member_id);
//     foreach($_POST['fruits'] as $key => $val){
//         $dataarr = array();
//         $dataarr['member_id'] = (int)$member_id;
//         $dataarr['fruits_id'] = (int)$val;
//         $chenge->insert('fruits_match',$dataarr);
//     }
// }



//--------------------------------------------------------------------------------------
/*!
@brief  メンバーデータの追加／更新。保存後自分自身を再読み込みする。
@return なし
*/
//--------------------------------------------------------------------------------------
function regist(){
    global $member_id;
    $dataarr = array();
    $dataarr['user_name'] = (string)$_POST['user_name'];
    $dataarr['prefecture_id'] = (int)$_POST['prefecture_id'];
    $dataarr['address1'] = (string)$_POST['address1'];
    $dataarr['member_gender'] = (int)$_POST['member_gender'];
    //$dataarr['member_comment'] = (string)$_POST['member_comment'];
    $dataarr['mail_address1'] = (string)$_POST['mail_address1'];
    $dataarr['address2'] = (string)$_POST['address2'];
    $dataarr['phone_number1'] = (string)$_POST['phone_number1'];
    $dataarr['passward'] = (string)$_POST['passward'];

    $chenge = new cchange_ex();
    if($member_id > 0){
        $chenge->update('user',$dataarr,'user_name=' . $member_id);
        //regist_fruits($member_id);
        cutil::redirect_exit($_SERVER['PHP_SELF'] . '?mid=' . $member_id);
    }
    else{
        $mid = $chenge->insert('user',$dataarr);
        //regist_fruits($mid);
        cutil::redirect_exit($_SERVER['PHP_SELF'] . '?mid=' . $mid);
    }
}
//--------------------------------------------------------------------------------------
/*!
@brief  ページの出力(一覧に戻るリンク用)
@return なし
*/
//--------------------------------------------------------------------------------------
function assign_page(){
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $page;
    $pagestr = '';
    if($page > 0){
        $pagestr =  '?page=' . $page;
    }
    $smarty->assign('page',$pagestr);
}

//--------------------------------------------------------------------------------------
/*!
@brief  メンバーIDのアサイン
@return なし
*/
//--------------------------------------------------------------------------------------
function assign_member_id(){
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $member_id;
    $smarty->assign('ID',$member_id);
}

//--------------------------------------------------------------------------------------
/*!
@brief  メンバーIDのアサイン(新規の場合は「新規」)
@return なし
*/
//--------------------------------------------------------------------------------------
function assign_member_id_txt(){
    //$smartyをグローバル宣言（必須）
    global $smarty;
    global $member_id;
    if($member_id <= 0){
        $smarty->assign('member_id_txt','新規');
    }
    else{
        $smarty->assign('member_id_txt',$member_id);
    }
}

//--------------------------------------------------------------------------------------
/*!
@brief  都道府県プルダウンのアサイン
@return なし
*/
//--------------------------------------------------------------------------------------
function assign_prefecture_rows(){
    //$smartyをグローバル宣言（必須）
    global $smarty;
    //都道府県の一覧を取得
    $prefecture_obj = new cprefecture();
    $allcount = $prefecture_obj->get_all_count(false);
    $prefecture_rows = $prefecture_obj->get_all(false,0,$allcount);
    $smarty->assign('prefecture_rows',$prefecture_rows);
}



/////////////////////////////////////////////////////////////////
/// 関数呼び出しブロック
/////////////////////////////////////////////////////////////////
if(!isset($_POST['user_name']))$_POST['user_name'] = '';
if(!isset($_POST['prefecture_id']))$_POST['prefecture_id'] = 0;
if(!isset($_POST['address1']))$_POST['address1'] = '';
if(!isset($_POST['member_gender']))$_POST['member_gender'] = 0;
//if(!isset($_POST['member_comment']))$_POST['member_comment'] = '';
if(!isset($_POST['mail_address1']))$_POST['mail_address1'] = '';
if(!isset($_POST['address2']))$_POST['address2'] = '';
if(!isset($_POST['phone_number1']))$_POST['phone_number1'] = '';
if(!isset($_POST['passward']))$_POST['passward'] = '';
assign_err_flag();
assign_page();
assign_member_id();
assign_member_id_txt();
assign_prefecture_rows();
$smarty->assign('err_array',$err_array);

//Smartyを使用した表示(テンプレートファイルの指定)
if(isset($_POST['func']) && $_POST['func'] == 'conf'){
    $button = '更新';
    if($member_id <= 0){
        $button = '追加';
    }
    $smarty->assign('button',$button);
    $smarty->display('admin/member_detail_smarty_conf.tmpl');
}
else{
    $smarty->display('admin/member_detail_smarty.tmpl');
}
?>