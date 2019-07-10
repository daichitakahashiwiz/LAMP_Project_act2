<?php
/* Smarty version 3.1.33, created on 2019-07-04 20:48:45
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/u_chat.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1de79d8cf2b6_73915610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c439cd99e71320ca30e7894b7b82638365cbb04' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/u_chat.tmpl',
      1 => 1562236944,
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
function content_5d1de79d8cf2b6_73915610 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link type="text/css" rel="stylesheet" href="./css/bmesse.css" />
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
		a.chat {
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
					<!-------------------------------------

						ここから右の青いとこだよ！！！！
						青いのは2個上のdivタグのクラスの
						bg-primaryを消すと白くなるよ！！！！！

					--------------------------------------->
					<!-- 自分やユーザーの情報 -->
					<!-- <h3 id="me" user_id="1">あなたはユーザー1です</h3>
					<h3 id="partner" thread_id="1">相手</h3> -->
					<!-- <div id="users">
						<button class="user" user_id="2">ユーザー2</button>
					</div> -->
					
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-4">
								<div id="your_container">

									<!-- チャットの外側部分① -->
									<div id="bms_messages_container" style="top: 0ex">
										<!-- ヘッダー部分② -->
										<div id="bms_chat_header">
											<!--ステータス-->
											<div id="bms_chat_user_status">
												<!--ステータスアイコン-->

												<!--ユーザー名-->

											</div>
										</div>

										<!-- タイムライン部分③ -->
										<div id="bms_messages">

											<!--メッセージ１（左側）-->
											<div class="bms_message bms_left">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text" class="w-nomal">テキスト</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<!--メッセージ２（右側）-->
											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">テキスト</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">テキスト</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">テキスト</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">テキスト</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">テキスト</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">テキスト</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">テキスト</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">テキスト</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">テキスト</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->


										</div>

										<!-- テキストボックス、送信ボタン④ -->
										<div id="bms_send">
											<textarea id="bms_send_message"></textarea>
											<div id="bms_send_btn">送信</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

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
