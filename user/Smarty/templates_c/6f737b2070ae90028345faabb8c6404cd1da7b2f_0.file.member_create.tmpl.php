<?php
/* Smarty version 3.1.33, created on 2019-07-05 16:05:21
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/member_create.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1ef6b1b138c1_89608555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f737b2070ae90028345faabb8c6404cd1da7b2f' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/member_create.tmpl',
      1 => 1562309703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1ef6b1b138c1_89608555 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>株式会社 猪狩典礼 ～終活支援サービスサイト～</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="終活をサポートするサイトです">
	<link rel="alternate stylesheet" href="./css/change.css" title="change">
	<?php echo '<script'; ?>
 type="text/javascript" src="js/openclose.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/ddmenu_min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/styleswitcher.js"><?php echo '</script'; ?>
>

	<!-- jQueryの呼び出し -->
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Bootstrap core js -->
	<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"><?php echo '</script'; ?>
>
	<!-- css,jsの呼び出し -->
	<link type="text/css" href="./css/import.css" rel="stylesheet" media="all" />
	<?php echo '<script'; ?>
 type="text/javascript" src="./js/app.js"><?php echo '</script'; ?>
>
	<!-- Font Awesome (朱里のkit) -->
	<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a1bcba65a0.js"><?php echo '</script'; ?>
>
	<!-- HTMLの呼び出し -->
	<?php echo '<script'; ?>
>
		$(function () {
			$("#header").load("./html/include/header.html");
			// $("#main").load("html/main.html");
			$("#footer").load("./html/include/footer.html");
		});
	<?php echo '</script'; ?>
>

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
<header id="header"></header>


	
	<div class="contents">
		<div class="inner">

			<div class="main">

				<section>
				<form name="form1" action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post" >


					<h2>会員情報入力</h2>
					<!-- <p>当ページと同じ３項目のお問い合わせフォーム（自動フォーム試用版）を簡単に使えるようにセットしています。<br>
	<span style="color: red;">※当ページ（contact.html）はフォームの見本ページです。実際の自動フォームには使いませんのでご注意下さい。</span></p>
	<p><strong class="color1">■自動フォームを使う場合（※編集に入る前にご確認下さい）</strong><br>
	あなたのメールアドレス設定と、簡単な編集だけで使えます。<a href="http://template-party.com/file/formgen_manual_set2.html" target="_blank">こちらのマニュアルをご覧下さい。</a></p>
	<p><strong class="color1">■自動フォームを使わない場合</strong><br>
	テンプレートに梱包されている「form.html」「confirm.html」「finish.html」の3枚のファイルを削除して下さい。</p> -->

					
					<table class="ta1">
					
					
						<tr>
							<th>お名前※</th>
							<td> 姓 <input type="text" name="user_name" size="15" value="<?php echo htmlspecialchars($_POST['user_name'], ENT_QUOTES, 'UTF-8', true);?>
">
							<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['user_name'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['user_name'];?>
</span><?php }?>
							</td>
						</tr>
						<tr>
							<th>お名前(カナ)※</th>
							<td> カナ <input type="text" name="user_name_kana" size="15"value="<?php echo htmlspecialchars($_POST['user_name_kana'], ENT_QUOTES, 'UTF-8', true);?>
"> 
							<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['user_name_kana'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['user_name_kana'];?>
</span><?php }?>
							</td>
						</tr>

						<!-- style="border :1px solid #eee; font-size :25px;" -->

						
						
						<tr>
							<th>生年月日</th>
							<td><input type="date" name="birthday"  value="<?php echo htmlspecialchars($_POST['birthday'], ENT_QUOTES, 'UTF-8', true);?>
" >
							<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['birthday'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['birthday'];?>
</span><?php }?></td>
						</tr>

						<tr>
							<th>郵便番号※</th>
							<td><input type="text" name="address_number" size="10" maxlength="7" value="<?php echo htmlspecialchars($_POST['address_number'], ENT_QUOTES, 'UTF-8', true);?>
" >
							<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['address_number'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['address_number'];?>
</span><?php }?></td>
						</tr>

						
						
						<tr>
<th>都道府県<span class="red">＊</span></th>
<td width="70%">
<select name="prefecture_id">
<option value="0" >選択してください</option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prefecture_rows']->value, 'value', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
if ($_smarty_tpl->tpl_vars['value']->value['prefecture_id'] == $_POST['prefecture_id']) {?>
<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['prefecture_id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['value']->value['prefecture_name'];?>
</option>
<?php } else { ?>
<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['prefecture_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['value']->value['prefecture_name'];?>
</option>
<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['prefecture_id'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['prefecture_id'];?>
</span><?php }?>
</td>
</tr>
						<tr>
							<th>市区町村、番地※</th>
							<td><input type="text" name="address1" size="40" class="ws" value="<?php echo htmlspecialchars($_POST['address1'], ENT_QUOTES, 'UTF-8', true);?>
">
							<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['address1'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['address1'];?>
</span><?php }?></td>
						</tr>

						<tr>
							<th>ビル名、マンション名</th>
							<td><input type="text" name="address2" size="30" class="ws" value="<?php echo htmlspecialchars($_POST['address2'], ENT_QUOTES, 'UTF-8', true);?>
" >
							<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['address2'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['address2'];?>
</span><?php }?></td>
						</tr>

						<tr>
<th>性別<span class="red">＊</span></th>
<td width="70%">
<input type="radio" name="member_gender" value="1" <?php if ($_POST['member_gender'] == 1) {?>checked="checked"<?php }?> />男性&nbsp;
<input type="radio" name="member_gender" value="2" <?php if ($_POST['member_gender'] == 2) {?>checked="checked"<?php }?> />女性
<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['member_gender'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['member_gender'];?>
</span><?php }?>
</td>
</tr>

						<tr>
							<th>電話番号1※</th>
							<td><input type="text" name="phone_number1" size="4"value="<?php echo htmlspecialchars($_POST['phone_number1'], ENT_QUOTES, 'UTF-8', true);?>
" >
							<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['phone_number1'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['phone_number1'];?>
</span><?php }?></td>
						</tr>

						<tr>
							<th>電話番号2※</th>
							<td><input type="text" name="phone_number2" size="4"  value="<?php echo htmlspecialchars($_POST['phone_number2'], ENT_QUOTES, 'UTF-8', true);?>
" >
							<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['phone_number2'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['phone_number2'];?>
</span><?php }?></td>
						</tr>

						<tr>
							<th>メールアドレス1※</th>
							<td><input type="text" name="mail_address1" size="20"  value="<?php echo htmlspecialchars($_POST['mail_address1'], ENT_QUOTES, 'UTF-8', true);?>
" >
							<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['mail_address1'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['mail_address1'];?>
</span><?php }?>
							</td>
						</tr>

						<tr>
							<th>メールアドレス2</th>
							<td><input type="text" name="mail_address2" size="20" value="<?php echo htmlspecialchars($_POST['mail_address2'], ENT_QUOTES, 'UTF-8', true);?>
">
							<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['mail_address2'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['mail_address2'];?>
</span><?php }?>
							</td>
						</tr>

						<tr>
							<th>パスワード※</th>
							<td><input type="password" name="passward" size="30" class="ws" value="<?php echo htmlspecialchars($_POST['passward'], ENT_QUOTES, 'UTF-8', true);?>
" >
							<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['passward'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['passward'];?>
</span><?php }?></td>
						</tr>

						<tr>
							<th>パスワード(再確認)※</th>
							<td><input type="password" name="passward_sai" size="30" class="ws" value="<?php echo htmlspecialchars($_POST['passward_sai'], ENT_QUOTES, 'UTF-8', true);?>
" >
							<?php if (isset($_smarty_tpl->tpl_vars['err_array']->value['passward_sai'])) {?><br /><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_array']->value['passward_sai'];?>
</span><?php }?></td>
		
						</tr>

						<!-- <tr>
						<th>お問い合わせ詳細※</th>
						<td><textarea name="お問い合わせ詳細" cols="30" rows="10" class="wl"></textarea></td>
						</tr> -->
	
					</table>
<input type="hidden" name="func" value="" />
<input type="hidden" name="param" value="" />
<input type="hidden" name="member_id" value="<?php echo $_smarty_tpl->tpl_vars['member_id']->value;?>
" />


					<p class="c">
							<input type="button" value="内容を確認する" class="btn" onClick="javascript:set_func_form('conf','')">
					</p>


					</form>
				

				</section>

			</div>
			<!--/main-->

		</div>
	</div>

	<p id="pagetop" class="inner"><a href="#">↑</a></p>



	<footer id="footer"></footer>

	<!--メニュー開閉ボタン-->
	<div id="menubar_hdr" class="close"></div>
	<!--メニューの開閉処理条件設定　800px以下-->
	
	<?php echo '<script'; ?>
 type="text/javascript">
		if (OCwindowWidth() <= 800) {
			open_close("menubar_hdr", "menubar-s");
		}
	<?php echo '</script'; ?>
>
	

</div>
<!-- /コンテンツ　-->
</div>
<!-- /全体コンテナ　-->
</body>
</html><?php }
}
