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

$member_id = 0;
$err_array = array();
$err_flag = 0;
$fff=0;

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
    /// 名前の存在と空白チェック
    if(ccontentsutil::chkset_err_field($err_array,'c_name','名前','isset_nl_strlen',100)){
        $retflg = false;
    }
    /// メールアドレス1の存在と空白チェック
    if(ccontentsutil::chkset_err_field($err_array,'c_mail','メールアドレス1','isset_mail1')){
        $retflg = false;
    }
    /// メールアドレス2の住所の存在と空白チェック
    if(ccontentsutil::chkset_err_field($err_array,'c_mail_sai','メールアドレス2','isset_mail1')){
        $retflg = false;
    }
    if($_POST['c_mail'] != $_POST['c_mail_sai']){
        $err_array['c_mail_sai'] = "項目「メールアドレス」と入力内容が異なります";
        $retflg = false;
    }
    ///お問い合わせ内容の存在と空白チェック
    if(ccontentsutil::chkset_err_field($err_array,'c_q','お問い合わせ内容','isset_nl')){
        $retflg = false;
    }

    // //パラメーターチェック
    // if('passward' != 'passward_sai'){
    //     $err_array['passward_sai'] = "項目「パスワード」と入力内容が異なります";
    //     $retflg = false;
    // }
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

    //パスワードが変更さえているかを確認する
    // if($member_id > 0){
    //     $obj = new cadmin_master();
    //     $arr = $obj->get_tgt_id(false,$member_id);
    //     if($arr['password'] != $_POST['password']){
    //         //変更された
    //         $_POST['password'] = cutil::pw_encode($_POST['password']);
    //     }
    // }
    // else{
    //     //新規
    //     $_POST['password'] = cutil::pw_encode($_POST['password']);
    // }

    // $dataarr = array();
    // $dataarr['c_name'] = (string)$_POST['c_name'];
    // $dataarr['c_mail'] = (string)$_POST['c_mail'];
    // $dataarr['c_mail_sai'] = (string)$_POST['c_mail_sai'];
    // $dataarr['c_q'] = (string)$_POST['c_q'];

    // $dataarr['prefecture_id'] = (int)$_POST['prefecture_id'];
    // $dataarr['address1'] = (string)$_POST['address1'];
    // $dataarr['member_gender'] = (int)$_POST['member_gender'];
    // //$dataarr['member_comment'] = (string)$_POST['member_comment'];
    // $dataarr['mail_address1'] = (string)$_POST['mail_address1'];
    // $dataarr['address2'] = (string)$_POST['address2'];
    // $dataarr['phone_number1'] = (string)$_POST['phone_number1'];
    // $dataarr['phone_number2'] = (string)$_POST['phone_number2'];
    // $dataarr['passward'] = (string)$_POST['passward'];
    // //$dataarr['passward_sai'] = (string)$_POST['passward_sai'];

    // $chenge = new cchange_ex();
    // if($member_id > 0){
    //     $chenge->update('user',$dataarr,'user_id=' . $member_id);
    //     //regist_fruits($member_id);
    //     cutil::redirect_exit($_SERVER['PHP_SELF'] . '?mid=' . $member_id);
    // }
    // else{
    //     $mid = $chenge->insert('user',$dataarr);
    //     //regist_fruits($mid);
    //     cutil::redirect_exit($_SERVER['PHP_SELF'] . '?mid=' . $mid);
    // }
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
    $smarty->assign('member_id',$member_id);
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


//--------------------------------------------------------------------------------------
/*!
@brief  メールの送信
@return なし
*/
//--------------------------------------------------------------------------------------
function send_mail_job(){
    $Subject = 'test';
$BaseMessage=<<<END_BLOCK
メンバーデータが更新されました

【更新日時】
<!--date-->

【更新メンバー】
<!--member_name-->


【更新管理者】
<!--admin_name-->


以上
END_BLOCK;


    $date_data = date('Y/m/d H:i:s');
    // $BaseMessage = str_replace('<!--date-->',$date_data,$BaseMessage);
    // $BaseMessage = str_replace('<!--member_name-->',$_POST['member_name'],$BaseMessage);
    // $BaseMessage = str_replace('<!--admin_name-->',$_SESSION['tmY2019_adm']['admin_name'],$BaseMessage);

     $Message = '';//$BaseMessage;
    //通常はFromは管理者メルアドを設定する
    //あるいは送信元メルアドをPOSTから得る
     $Headers = "From: " . 'rikuriku8150@gmail.com' . "\r\n";
     $Headers .= "Content-Type: text/plain;";
     $Message .= ($_POST['c_q']) . "\r\n";
    //通常は$Toは管理者メルアドを設定する
    //つまり「管理者」から「管理者」に送るメールとして送信する
     $To = 'ase17410039@wiz.ac.jp';
/*
メール送信は実際に送信する前に、何度もデバッグをすべきである
そのため、以下のデバッグロジックを実装しておいて、確認の上、コメントにする
*/


$debugstr=<<<END_BLOCK
<br />///////メールデバッグここから/////////<br />
<br />送信されるタイトル<br />
{$Subject}
<br />本文メッセージ<br />
{$Message}
<br />ヘッダ<br />
{$Headers}
<br />送信先<br />
{$To}
<br />
<br />/////////メールデバッグここまで//////////<br />

END_BLOCK;


// echo $debugstr;
// exit;


   //本番送信
//改行が2重になる場合は以下行を生かす
//$Message = str_replace("\r","",$Message);
//以下のコメントを外すときは慎重に

	mb_send_mail($To, $Subject, $Message, $Headers);

}

/////////////////////////////////////////////////////////////////
/// 関数呼び出しブロック
/////////////////////////////////////////////////////////////////
if(!isset($_POST['c_name']))$_POST['c_name'] = '';
if(!isset($_POST['c_mail']))$_POST['c_mail'] = '';
if(!isset($_POST['c_mail_sai']))$_POST['c_mail_sai'] = '';
if(!isset($_POST['c_q']))$_POST['c_q'] = '';

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
    
   

    $smarty->display('admin/contact_us_confirmation.tmpl');
    
   
    
    
}else if(isset($_POST['param']) && $_POST['param'] == 'r'){
    //header('Location: admin/index.php/');
    //header("location: index.php");
    send_mail_job();
    $smarty->display('admin/contact_us_end.tmpl');

}else if(isset($_POST['param']) && $_POST['param'] == 'h'){
    //header('Location: admin/index.php/');
    header("location: index.php");
    //$smarty->display('admin/index.tmpl');

}else{
    $smarty->display('admin/contact_us.tmpl');

}
?>