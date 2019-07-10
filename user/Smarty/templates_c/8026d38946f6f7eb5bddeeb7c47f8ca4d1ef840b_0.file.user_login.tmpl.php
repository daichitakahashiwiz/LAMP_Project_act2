<?php
/* Smarty version 3.1.33, created on 2019-07-10 00:19:59
  from '/home/tmD2019/public_html/user/Smarty/templates/user_login.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d24b09f2a8138_74678237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8026d38946f6f7eb5bddeeb7c47f8ca4d1ef840b' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/user_login.tmpl',
      1 => 1562683787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d24b09f2a8138_74678237 (Smarty_Internal_Template $_smarty_tpl) {
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
	<?php echo '<script'; ?>
>
		$(function () {
			$("#header").load("./html/include/header.html");
			$("#footer").load("./html/include/footer.html");
		});
	<?php echo '</script'; ?>
>
	
</head>
<body>
    <header id="header"></header>
    

	<div class="contents">
		<div class="inner">
			<div class="main">
				<div class="container login-container">
					<div class="row">
						<div class="col-md-6 login-form-2">
						<h1>ログイン</h1>
							<div id="inquiry">
							<p class="red"><?php echo '<?php ';?>echo cutil::ret2br($ERR_STR); <?php echo '?>';?></p>
							<form action="login.php" method="post">					
								
									<div class="form-group">
										<input type="text" name="mail_address1" class="form-control" placeholder="メールアドレス*" value="" />
									</div>
									<div class="form-group">
										<input type="password" name="passward" class="form-control" placeholder="パスワード*" value="" />
									</div>
									<div class="form-group">
										<input type="submit" class="btnSubmit" value="ログイン" />
									</div>
									<div class="form-group">
										<a href="#" class="ForgetPwd" value="Login">パスワードを忘れた方はこちら</a>
									</div>
									<div class="form-group">
											<a href="#" class="NewPwd" value="Login">新規作成はこちら</a>
									</div>
							</form>
						</div>
					</div>		
				</div>							   
			</div>
			<!--/main-->
		</div><!--/.inner-->
	</div><!--/.contents-->

	<footer id="footer"></footer>
</body>
</html><?php }
}
