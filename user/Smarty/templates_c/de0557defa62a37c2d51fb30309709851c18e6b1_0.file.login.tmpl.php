<?php
/* Smarty version 3.1.33, created on 2019-07-03 13:28:43
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/login.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1c2efb555091_85521674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de0557defa62a37c2d51fb30309709851c18e6b1' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/login.tmpl',
      1 => 1562114317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1c2efb555091_85521674 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link href="css/main.css" rel="stylesheet" type="text/css">
<title>ログイン</title>
<?php echo '<script'; ?>
 type="text/javascript">
<!--


// -->
<?php echo '</script'; ?>
>
</head>
<body>
<!-- 全体コンテナ　-->
<div id="container">
<div id="headTitle">
<h2>ログイン</h2>
</div>
<!-- コンテンツ　-->
<div id="inquiry">
<p class="red"><?php echo '<?php ';?>echo cutil::ret2br($ERR_STR); <?php echo '?>';?></p>
<form action="login.php" method="post">
<table>
<tr>
<th>ログインID</th>
<td width="60%"><input type="text" size="10" maxlength="10" name="admin_login" value="" style="ime-mode: disabled;"/></td>
</tr>
<tr>
<th class="nobottom">パスワード</th>
<td width="60%" class="nobottom"><input type="password" size="10" maxlength="10" name="admin_password" value="" style="ime-mode: disabled;"/></td>
</tr>
</table>
<p class="center"><input type="submit" value="ログイン"/></p>
</form>
</div>
<!-- /コンテンツ　-->
</div>
<!-- /全体コンテナ　-->
</body>
</html>

<?php }
}
