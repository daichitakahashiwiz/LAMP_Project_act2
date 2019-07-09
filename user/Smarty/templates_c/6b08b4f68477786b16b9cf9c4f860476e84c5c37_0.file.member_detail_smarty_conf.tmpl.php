<?php
/* Smarty version 3.1.33, created on 2019-07-03 13:59:05
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/member_detail_smarty_conf.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1c3619b91275_74119665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b08b4f68477786b16b9cf9c4f860476e84c5c37' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/member_detail_smarty_conf.tmpl',
      1 => 1562114318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./gmenu.tmpl' => 1,
  ),
),false)) {
function content_5d1c3619b91275_74119665 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link href="css/main.css" rel="stylesheet" type="text/css">
<title>メンバー詳細</title>

<?php echo '<script'; ?>
 type="text/javascript">
<!--
function set_func_form(fn,pm){
	document.form1.target = "_self";
	document.form1.func.value = fn;
	document.form1.param.value = pm;
	document.form1.submit();
}


// -->
<?php echo '</script'; ?>
>

</head>
<body>
<!-- 全体コンテナ　-->
<div id="container">
<?php $_smarty_tpl->_subTemplateRender('file:./gmenu.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="headTitle">
<h2>メンバー詳細</h2>
</div>
<!-- コンテンツ　-->
<div id="inquiry">
ようこそ<?php echo $_SESSION['DTeam_adm']['admin_name'];?>
さん<br />
<form name="form1" action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post" >
<a href="member_list_smarty.php<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">一覧に戻る</a><br />
<span class="red">＊</span>は必須項目
<table>
<tr>
<th>ID</th>
<td width="70%"><?php echo $_smarty_tpl->tpl_vars['member_id_txt']->value;?>
</td>
</tr>
<tr>
<th>メンバー名<span class="red">＊</span></th>
<td width="70%">
<strong><?php echo htmlspecialchars($_POST['user_name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
<input type="hidden" name="user_name" value="<?php echo htmlspecialchars($_POST['user_name'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
</tr>
<tr>
<th>都道府県<span class="red">＊</span></th>
<td width="70%">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prefecture_rows']->value, 'value', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
if ($_smarty_tpl->tpl_vars['value']->value['prefecture_id'] == $_POST['prefecture_id']) {?>
<strong><?php echo $_smarty_tpl->tpl_vars['value']->value['prefecture_name'];?>
</strong>
<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<input type="hidden" name="prefecture_id" value="<?php echo $_POST['prefecture_id'];?>
" />
</td>
</tr>
<tr>
<th>市区郡町村以下<span class="red">＊</span></th>
<td width="70%">
<strong><?php echo htmlspecialchars($_POST['address1'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
<input type="hidden" name="address1"  value="<?php echo htmlspecialchars($_POST['address1'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
</tr>
<tr>
<th>性別<span class="red">＊</span></th>
<td width="70%">
<?php if ($_POST['member_gender'] == 1) {?>
<strong>男性</strong>
<?php } else { ?>
<strong>女性</strong>
<?php }?>
<input type="hidden" name="member_gender" value="<?php echo $_POST['member_gender'];?>
" />
</td>
</tr>

<!-- /自分で作ったやつ　-->
<!-- /メールアドレス　-->
<tr>
<th>メールアドレス<span class="red">＊</span></th>
<td width="70%"><input type="text" name="mail_address1" siDe="70" value="<?php echo htmlspecialchars($_POST['mail_address1'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['mail_address1'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['mail_address1'];?>
</span><?php }?>
</td>
</tr>
<!-- /建物以下の住所　-->
<tr>
<th>建物以下の住所<span class="red">＊</span></th>
<td width="70%"><input type="text" name="address2" siDe="70" value="<?php echo htmlspecialchars($_POST['address2'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['address2'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['address2'];?>
</span><?php }?>
</td>
</tr>
<!-- /電話番号　-->
<tr>
<th>電話番号<span class="red">＊</span></th>
<td width="70%"><input type="text" name="phone_number1" siDe="70" value="<?php echo htmlspecialchars($_POST['phone_number1'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['phone_number1'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['phone_number1'];?>
</span><?php }?>
</td>
</tr>
<!-- /パスワード　-->
<tr>
<th>パスワード<span class="red">＊</span></th>
<td width="70%"><input type="text" name="passward" siDe="70" value="<?php echo htmlspecialchars($_POST['passward'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['passward'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['passward'];?>
</span><?php }?>
</td>
</tr>


</table>
<input type="hidden" name="func" value="" />
<input type="hidden" name="param" value="" />
<input type="hidden" name="member_id" value="<?php echo $_smarty_tpl->tpl_vars['member_id']->value;?>
" />
<p class="center">
<input type="button"  value="戻る" onClick="javascript:set_func_form('edit','')"/>&nbsp;
<input type="button"  value="<?php echo $_smarty_tpl->tpl_vars['button']->value;?>
" onClick="javascript:set_func_form('set','')"/>
</p>
</form>
</div>
<!-- /コンテンツ　-->
</div>
<!-- /全体コンテナ　-->
</body>
</html>
<?php }
}
