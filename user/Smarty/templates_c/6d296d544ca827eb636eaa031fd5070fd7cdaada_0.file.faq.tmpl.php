<?php
/* Smarty version 3.1.33, created on 2019-07-10 09:33:43
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/faq.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d253267b06b65_07312320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d296d544ca827eb636eaa031fd5070fd7cdaada' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/faq.tmpl',
      1 => 1562683780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../html/include/header.tmpl' => 1,
    'file:./../../../html/include/footer.tmpl' => 1,
  ),
),false)) {
function content_5d253267b06b65_07312320 (Smarty_Internal_Template $_smarty_tpl) {
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
		a.faq{
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
			<div class="main">
				<section>
					<h2>よくある質問</h2>
					<dl class="faq">
						<div class="card-header">サービス全般</div>

						<dt>プラン料金以外に、追加料金はかからないのですか？</dt>

						<dd>プラン内には、基本的に葬儀に必要となる物品が含まれており、表記している金額でお葬式を行うことができます。
								<br>但し、以下のようなケースにおいては追加費用がかかる場合がありますのでご注意ください。</br>
								※参列者への返礼品や食事を別途手配して頂いた場合。
								※僧侶へ読経を依頼、または戒名の授与を依頼する場合。
								<br>※住民票がある地域以外（市民料金の適用外）の火葬場、及び公営葬儀斎場を使用する場合。
								規定日数以上の期間においてご遺体の安置を希望される場合。1日あたり10,800円(消費税8%込)を要します。</br>
								※お客様の希望でその他物品・サービスをご注文された場合。
								※搬送距離が50kmを超える場合。
								<br>ほか、上記以外にも追加費用が発生する場合があります。詳細は会員限定のチャット又はお電話にてお問合せください</br>
						</dd>

						<dt>ここに質問を入れます。サンプルテキスト。</dt>
						<dd>ここに回答を入れます。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>

						<dt>ここに質問を入れます。サンプルテキスト。</dt>
						<dd>ここに回答を入れます。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>

						<dt>ここに質問を入れます。サンプルテキスト。</dt>
						<dd>ここに回答を入れます。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>

						<dt>ここに質問を入れます。サンプルテキスト。</dt>
						<dd>ここに回答を入れます。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
					</dl>
				</section>
			</div>
			<!--/main-->
		</div><!--/.inner-->
	</div><!--/.contents-->

	<p id="pagetop" class="inner"><a href="#">↑</a></p>
	
<footer id="footer">
		<?php $_smarty_tpl->_subTemplateRender('file:./../../../html/include/footer.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</footer>
</body>
</html><?php }
}
