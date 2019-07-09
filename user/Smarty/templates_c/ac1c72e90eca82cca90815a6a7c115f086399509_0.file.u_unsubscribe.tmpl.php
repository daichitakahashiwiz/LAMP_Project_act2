<?php
/* Smarty version 3.1.33, created on 2019-07-09 11:11:00
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/u_unsubscribe.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d23f7b4c01d78_24265367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac1c72e90eca82cca90815a6a7c115f086399509' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/u_unsubscribe.tmpl',
      1 => 1562636436,
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
function content_5d23f7b4c01d78_24265367 (Smarty_Internal_Template $_smarty_tpl) {
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
		a.unsubscribe {
			background: #2b3f7f;
			color: #fff;
		}
	</style>

	
	<?php echo '<script'; ?>
 type="text/javascript">
			function set_func_form(fn, pm) {
				document.form1.target = "_self";
				document.form1.func.value = fn;
				document.form1.param.value = pm;
				document.form1.submit();
			}

		function del_func_form(pm, mess) {
			var message = "本当に\r\n";
			message += mess;
			message += "\r\nを削除しますか？";
			if (confirm(message)) {
				document.form1.target = "_self";
				document.form1.func.value = 'del';
				document.form1.param.value = pm;
				document.form1.submit();
			}
		}
	<?php echo '</script'; ?>
>
	

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
					<section>
						<h2>退会手続き</h2>
						<div class="container">
							<div class="row">
								<div class="col unsubscribe">

									<!-- <p class="text-danger warning">
											<i class="fas fa-exclamation-circle text-danger"></i>
											退会にあたっての注意事項<br/>
											退会を行うと進行途中のサービスを終了し、以下の情報が全てなくなります。
										</p> -->

									<div class="list unsubscribe">

										<p class="text-danger warning">
											<i class="fas fa-exclamation-circle text-danger"></i>
											退会にあたっての注意事項<br />
											退会を行うと進行途中のサービスを終了し、以下の情報が全てなくなります。
										</p>
										<!-- <h4>リンクを設定しないと</h4>
										<p>このブに、ボックス右下の矢印マークが出なくなります。画像も外してもらってもOK。</p> -->
										<div class="container mt-5">
											<div class="row c3 justify-content-around">
												<div class="col-3 list">
													<i class="fas fa-address-card fa-5x"></i>
													<p>ユーザー情報</p>
												</div>
												<div class="col-3 list">
													<i class="fas fa-list-alt fa-5x"></i>
													<p>プランのデータ</p>
												</div>
												<div class="col-3 list">
													<i class="fas fa-comments fa-5x"></i>
													<p>これまでのチャット</p>
												</div>
											</div><!--/.row-->
											<div class="row c3 justify-content-around">
												<div class="col-3 list">
													<i class="fas fa-address-card fa-5x"></i>
													<p>ユーザー情報</p>
												</div>
												<div class="col-3 list">
													<i class="fas fa-address-card fa-5x"></i>
													<p>ユーザー情報</p>
												</div>
												<div class="col-3 list">
													<i class="fas fa-comments fa-5x"></i>
													<p>これまでのチャット</p>
												</div>
											</div><!--/.row-->


											<!-- <div class=""> -->
												<ul class="row justify-content-around" id="ubutton">
													<li>
														<!-- <a href="./u_unsubxcribeDone.php">退会します</a> -->
														<input type="button" value="削除確認" onClick="javascript:del_func_form(<?php echo $_smarty_tpl->tpl_vars['value']->value['prefecture_id'];?>
,'【<?php echo $_smarty_tpl->tpl_vars['value']->value['prefecture_name'];?>
】')" /></td>
													</li>
													<!-- <li class="col-4"><a href="contact2.html">ログイン</a></li> -->
												</ul>
											<!-- </div> -->
	
										</div><!--/.container-->




									</div><!--/.list-->
								</div><!--/.col-->
							</div><!--/.row-->
	
						</div><!--/.container-->
					</section>


				</div>
				<!--/.inner-->
			</div>
			<!--/.contents-->
		</div>
		<!--/.row.usermenubar-->
	</div>
	<!--/.user.container-fluid-->


	<footer id="footer">
		<?php $_smarty_tpl->_subTemplateRender('file:./../../../html/include/footer.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</footer>
</body>

</html><?php }
}
