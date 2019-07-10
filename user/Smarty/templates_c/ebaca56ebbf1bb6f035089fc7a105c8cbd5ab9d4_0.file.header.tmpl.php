<?php
/* Smarty version 3.1.33, created on 2019-07-04 18:50:39
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/header.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1dcbef0b14b3_39844882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebaca56ebbf1bb6f035089fc7a105c8cbd5ab9d4' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/header.tmpl',
      1 => 1562218187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1dcbef0b14b3_39844882 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- header要素 -->

<div class="inner">
    <h1 id="logo"><a href="index.html"><img src="images/logo.1.png" alt="サンプルホーム"></a></h1>
    <ul id="headermenu">
	<li><?php echo $_SESSION['DTeam_adm']['admin_name'];?>
さん</li>
        <li><a href="contact_us.php">新規登録</a></li>
        <li><a href="login.php">ログイン</a></li>
    </ul>
    <!--文字サイズ変更ボタン-->
    <div id="fsize">
        <p>文字サイズ</p>
        <ul>
            <li id="small"><a href="#" onclick="setActiveStyleSheet('default'); return false;"
                    title="文字サイズ「小」"></a></li>
            <li id="large"><a href="#" onclick="setActiveStyleSheet('change'); return false;"
                    title="文字サイズ「大」"></a></li>
        </ul>
    </div>
</div>

<!--PC用（801px以上端末）メニュー-->
<nav id="menubar">
    <ul class="inner">
        <li><a class="index" href="./index.php">ホーム</a></li>
        <li><a class="faq" href="./faq.php">よくある質問</a>
            <ul class="ddmenu">
                <li><a href="#">サービス１</a></li>
                <li><a href="#">サービス２</a></li>
                <li><a href="#">サービス３</a></li>
            </ul>
        </li>
        <li><a class="plan" href="./plan.php">プラン</a></li>
        <li><a class="knowledge" href="./syuukatu_knowledge.php">終活知識</a></li>
        <li><a class="user" href="./u_chat.php">ユーザーページ</a></li>
    </ul>
</nav>
<!--小さな端末用（800px以下端末）メニュー-->
<nav id="menubar-s">
    <ul>
        <li><a href="./index.php">ホーム</a></li>
        <li><a href="./faq.php">よくある質問</a></li>
        <li><a href="./plan.php">プラン</a></li>
        <li><a href="./syuukayiu_knowledge.php">終活知識</a></li>
        <li><a href="./u_chat.php">ユーザーページ</a></li>
    </ul>
</nav>
<?php }
}
