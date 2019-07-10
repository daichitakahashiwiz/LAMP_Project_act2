<?php
/********************************

auth_user.php

管理者ログイン認証
認証が必要なページはこのファイルをインクルードする
すでにlibs.phpがインクルードされている必要がある
*複数のサイトが同居またはユーザー管理と混同しないため
$_SESSIONは多次元配列にする

             2019/7/6 igari yuta
*********************************/
session_start();
if((!isset($_SESSION['DTeam_user']['mail_address1'])) 
    || (!isset($_SESSION['DTeam_user']['user_id']))){
    cutil::redirect_exit("login.php");
}
$user = new cuser();
$row = $user->get_tgt_id(false,$_SESSION['DTeam_user']['mail_address1']);
if($row === false || !isset($row['user_id'])){
    cutil::redirect_exit("login.php");
}

if($row['user_id'] != $_SESSION['DTeam_user']['user_id']){
    cutil::redirect_exit("login.php");
}
if($row['mail_address1'] != $_SESSION['DTeam_user']['mail_address1']){
    cutil::redirect_exit("login.php");
}

// function echo_hello_user_name(){
//     if(isset($_SESSION['DTeam_user']['user_name'])){
//         echo $_SESSION['DTeam_user']['user_name'];
//     }
// }
?>
