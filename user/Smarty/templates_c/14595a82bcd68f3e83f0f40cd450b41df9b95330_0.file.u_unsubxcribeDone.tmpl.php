<?php
/* Smarty version 3.1.33, created on 2019-07-09 09:42:15
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/u_unsubxcribeDone.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d23e2e7c84c94_77672871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14595a82bcd68f3e83f0f40cd450b41df9b95330' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/u_unsubxcribeDone.tmpl',
      1 => 1562236385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../html/include/header.tmpl' => 1,
    'file:./../../../html/include/footer.tmpl' => 1,
  ),
),false)) {
function content_5d23e2e7c84c94_77672871 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Bootstrap core js -->
	<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
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
			$("#footer").load("./html/include/footer.html");
		});
	<?php echo '</script'; ?>
> -->
	<style>
		a.user{
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
	<div class="contents">
		<div class="inner">
			<section>
				<h2>退会完了</h2>
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="list text-center unsubscribedone">
								<h4>退会手続きが完了しました</h4>
								<p>猪狩典礼をご利用いただきありがとうございました。<br/>またのご利用を、心よりお待ちしております。</p>
								<ul class="row justify-content-around mt-5" id="ubutton">
									<li class="col-4"><a href="./index.php">トップページに戻る</a></li>
									<!-- <li class="col-4"><a href="contact2.html">ログイン</a></li> -->
								</ul>
							</div>
						</div>

					</div><!--/.row-->

				</div><!--/.container-->
			</section>

		</div><!--/.inner-->
	</div><!--/.contents-->

	<footer id="footer">
		<?php $_smarty_tpl->_subTemplateRender('file:./../../../html/include/footer.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</footer>
</body>
</html><?php }
}
