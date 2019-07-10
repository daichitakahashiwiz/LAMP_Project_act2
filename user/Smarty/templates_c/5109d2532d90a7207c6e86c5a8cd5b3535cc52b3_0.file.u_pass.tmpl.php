<?php
/* Smarty version 3.1.33, created on 2019-07-04 20:49:00
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/u_pass.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1de7acf0a753_81245243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5109d2532d90a7207c6e86c5a8cd5b3535cc52b3' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/u_pass.tmpl',
      1 => 1562237009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../html/include/header.tmpl' => 1,
    'file:./../../../html/include/usermenubar.tmpl' => 1,
    'file:./../../../html/include/footer.tmpl' => 1,
  ),
),false)) {
function content_5d1de7acf0a753_81245243 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>株式会社 猪狩典礼 ～終活支援サービスサイト～</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="終活をサポートするサイトです">
	<link rel="alternate stylesheet" href="css/change.css" title="change">
	<?php echo '<script'; ?>
 type="text/javascript" src="js/openclose.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/ddmenu_min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/styleswitcher.js"><?php echo '</script'; ?>
>
	<link rel="icon" type="image/vnd.microsoft.icon" href="./images/favicon.png">

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
	<!-- <?php echo '<script'; ?>
>
		$(function () {
			$("#header").load("./html/include/header.html");
			$("#usermenubar").load("./html/include/usermenubar.html");
			$("#footer").load("./html/include/footer.html");
		});
	<?php echo '</script'; ?>
> -->
	<style>
		a.user,
		a.pass {
			background: #2b3f7f;
			color: #fff;
		}
	</style>
</head>

<body>
	<header id="header">
		<?php $_smarty_tpl->_subTemplateRender('file:./../../../html/include/header.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</header>


	<div class="user container-fluid">
		<div class="row usermenubar">

			<div class="col-2 usermenubar sub p-0">
				<div id="usermenubar">
					<?php $_smarty_tpl->_subTemplateRender('file:./../../../html/include/usermenubar.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>
			</div>

			<div class="col-10 main-content contents">
				<div class="inner">
					<section class="c3">
						<h2>パスワード変更</h2>
						<p>下記に入力し、「パスワードを変更する」ボタンをクリックしてください。</p>
						<div class="container">

							<form class="mx-5">
								<div class="form-group row justify-content-center mb-5 border-bottom">
									<label for="Password" class="col-sm-4 col-form-label mb-3">現在のパスワード</label>
									<div class="col-sm-7 pass-box mb-3">
										<input type="password" class="form-control" id="Password" placeholder="パスワード">
										<span class="field-icon">
											<i toggle="#password-field" class="fas fa-eye toggle-password"></i>
										</span>
										<div class="invalid-feedback">
											現在のパスワードを入力してください
										</div>
									</div>
								</div>
								<div class="form-group row justify-content-center mb-3">
									<label for="Password" class="col-sm-4 col-form-label">新しいパスワード</label>
									<div class="col-sm-7">
										<input type="password" class="form-control" id="Password" placeholder="パスワード">
										<span class="field-icon">
											<i toggle="#password-field" class="fas fa-eye toggle-password"></i>
										</span>
									</div>
								</div>
								<div class="form-group row justify-content-center mb-3">
									<label for="Password" class="col-sm-4 col-form-label">新しいパスワード・確認</label>
									<div class="col-sm-7">
										<input type="password" class="form-control" id="Password" placeholder="パスワード">
										<span class="field-icon">
											<i toggle="#password-field" class="fas fa-eye toggle-password"></i>
										</span>
										<div class="invalid-feedback">
											現在のパスワードと違うものにしてください
										</div>
										<div class="invalid-feedback">
											新しく設定するパスワードを２度入力してください
										</div>
									</div>
								</div>
							</form><!--/.form-->

							<ul class="row justify-content-around mt-5 passbtn" id="ubutton">
								<li class="col-4" herf="u_pass.php"><a>パスワードを変更する</a></li>
								<!-- <li class="col-4"><a href="contact2.html">ログイン</a></li> -->
							</ul>
						</div><!--/.container-->
					</section><!--/.c3-->

				</div><!--/.inner-->
			</div><!--/.contents-->
		</div><!--/.row.usermenubar-->
	</div><!--/.user.container-fluid-->


	<footer id="footer">
		<?php $_smarty_tpl->_subTemplateRender('file:./../../../html/include/footer.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</footer>
</body>

</html><?php }
}
