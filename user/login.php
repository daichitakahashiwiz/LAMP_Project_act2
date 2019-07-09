<?php
/*!
@file user_login.php
@brief  ログイン画面　（ユーザ画面）
@copyright Copyright (c) 2019 igari yuta.
*/

require_once("inc_base.php");
require_once($CMS_COMMON_INCLUDE_DIR . "libs.php");
require_once("inc_smarty.php");

$ERR_STR = "";
$user_id = "";
$user_name = "";

session_start();
if(isset($_SESSION['DTeam_user']['err']) && $_SESSION['DTeam_user']['err'] != ""){
    $ERR_STR = $_SESSION['DTeam_user']['err'];
}

session_unset();
session_destroy();

if(isset($_POST['mail_address1']) && isset($_POST['passward'])){
    if(chk_mail_address1(
        strip_tags($_POST['mail_address1']),
        strip_tags($_POST['passward']))){
        session_start();
        $_SESSION['DTeam_user']['mail_address1'] = strip_tags($_POST['mail_address1']);
        $_SESSION['DTeam_user']['user_id'] = $user_id;
        $_SESSION['DTeam_user']['user_name'] = $user_name;
        cutil::redirect_exit("index.php");
    }
    
}

function chk_mail_address1($mail_address1,$passward){
    global $ERR_STR;
    global $user_id;
    global $user_name;
    $user = new cuser();
    $row = $user->get_tgt_id(false,$mail_address1);
    if($row === false || !isset($row['user_id'])){
        $ERR_STR .= "ログイン名が不定です。\n";
        return false;
    }
    //暗号化によるパスワード認証
    // if(!cutil::pw_check($passward,$row['enc_passward'])){
    //     $ERR_STR .= "パスワードが違っています。\n";
    //     return false;
    // }

    if($row['passward'] !=$passward){
        $ERR_STR .= "パスワードが違っています。\n";
        return false;
    }

    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    return true;
}

//Smartyを使用した表示(テンプレートファイルの指定)
$smarty->display('Smarty/templates/user_login.tmpl');


?>