<?php
/* Smarty version 3.1.33, created on 2019-07-04 20:48:45
  from '/home/tmD2019/public_html/user/html/include/usermenubar.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1de79d8d4227_22284801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '882aba5d26f2406565954552bc6afd74351acf4d' => 
    array (
      0 => '/home/tmD2019/public_html/user/html/include/usermenubar.tmpl',
      1 => 1561991114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1de79d8d4227_22284801 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- ユーザーページのサイドバー要素 -->

<nav class="box1">
    <h2>Menu</h2>
    <ul class="submenu usermenu">
        <li><a class="chat" href="./u_chat.php">チャット</a></li>
        <li><a class="check" href="./u_check.php">準備チェック</a></li>
        <li><a class="plan" href="./u_plan.php">プラン管理</a></li>
        <!-- <li><a class="family" href="./u_family.php">家族会員登録</a></li> -->
        <li><a class="pass" href="./u_pass.php">パスワード変更</a></li>
        <li><a class="unsubscribe" href="./u_unsubscribe.php">退会</a></li>
    </ul>
</nav>



<?php }
}
