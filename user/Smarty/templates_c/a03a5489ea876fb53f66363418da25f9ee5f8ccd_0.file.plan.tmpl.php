<?php
/* Smarty version 3.1.33, created on 2019-07-04 20:48:40
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/plan.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1de7986c5ce6_42197646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a03a5489ea876fb53f66363418da25f9ee5f8ccd' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/plan.tmpl',
      1 => 1562236218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../html/include/header.tmpl' => 1,
    'file:./../../../html/include/footer.tmpl' => 1,
  ),
),false)) {
function content_5d1de7986c5ce6_42197646 (Smarty_Internal_Template $_smarty_tpl) {
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
		a.plan{
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
					<section class="c2">
						<h2>プラン一覧</h2>
						<div class="container">
							<div class="row">
								<div class="col list plan_list">
									<a href="planDetails.php">
										<div class="row mb-3 justify-content-center">
											<label class="col-9 px-4 rounded-pill text-center p_ellipse" for="">必要なものを含んだセットプラン</label>
										</div>
										<h4 class="mb-0">火葬式</h4>
										<img src="./images//plan/p1.jpg" alt="">
										<label class="number mb-0" for="">000,000</label>
										<label class="" for="">円(税別)</label>
										<ul class="row mx-1 mb-3 schedule text-center justify-content-center">
											<li class="col mr-2 text-center ">お迎え</li>
											<li class="col mr-2 text-center py-1">ご遺体<br>安置</li>
											<li class="col mr-2 text-center py-1">納棺の<br>儀式</li>
											<li class="col border mr-2 text-center py-1">お通夜</li>
											<li class="col border mr-2 text-center py-1">お別れの<br>儀式</li>
											<li class="col border mr-2 text-center py-1">告別式</li>
											<li class="col mr-2 text-center py-1">お別れの<br>儀式</li>
											<li class="col text-center py-1">火葬</li>
										</ul>
										<div class="row">
											<div class="col-7">
												<label class="p_feature px-2 mb-0 rounded" for="">プランの特徴</label>
												<p class="">
													&emsp;火葬のみで負担を少なく<br>
													&emsp;家族だけでお見送りを<br>
												</p>
											</div>
											
											<div class="col-5 peoplenumber">
												<label class="p_feature px-2 mb-0 rounded" for="">参拝者数の目安</label>
												<p>
													<label class="pn_num mb-0" for="">&thinsp;20</label>
													<label class="pn_txt mb-0" for="">名程度</label>
												</p>
											</div>
										</div><!-- /.row -->
									</a>
								</div>

								<div class="col list plan_list">
									<a href="planDetails.php">
										<div class="row mb-3 justify-content-center">
											<label class="col-9 px-4 rounded-pill text-center p_ellipse" for="">必要なものを含んだセットプラン</label>
										</div>
										<h4 class="mb-0">一日葬</h4>
										<img src="./images//plan/p1.jpg" alt="">
										<label class="number mb-0" for="">000,000</label>
										<label class="" for="">円(税別)</label>
										<ul class="row mx-1 mb-3 schedule text-center justify-content-center">
											<li class="col mr-2 text-center ">お迎え</li>
											<li class="col mr-2 text-center py-1">ご遺体<br>安置</li>
											<li class="col mr-2 text-center py-1">納棺の<br>儀式</li>
											<li class="col border mr-2 text-center py-1">お通夜</li>
											<li class="col border mr-2 text-center py-1">お別れの<br>儀式</li>
											<li class="col mr-2 text-center py-1">告別式</li>
											<li class="col mr-2 text-center py-1">お別れの<br>儀式</li>
											<li class="col text-center py-1">火葬</li>
										</ul>
										<div class="row">
											<div class="col-7">
												<label class="p_feature px-2 mb-0 rounded" for="">プランの特徴</label>
												<p class="">
													&emsp;火葬のみで負担を少なく<br>
													&emsp;家族だけでお見送りを<br>
												</p>
											</div>
										
											<div class="col-5 peoplenumber">
												<label class="p_feature px-2 mb-0 rounded" for="">参拝者数の目安</label>
												<p>
													<label class="pn_num mb-0" for="">&thinsp;20</label>
													<label class="pn_txt mb-0" for="">名程度</label>
												</p>
											</div>
										</div><!-- /.row -->
									</a>
								</div>
							</div><!--/.row-->
														<div class="row">
								<div class="col list plan_list">
									<a href="planDetails.php">
										<div class="row mb-3 justify-content-center">
											<label class="col-9 px-4 rounded-pill text-center p_ellipse" for="">必要なものを含んだセットプラン</label>
										</div>
										<h4 class="mb-0">家族葬</h4>
										<img src="./images//plan/p1.jpg" alt="">
										<label class="number mb-0" for="">000,000</label>
										<label class="" for="">円(税別)</label>
										<ul class="row mx-1 mb-3 schedule text-center justify-content-center">
											<li class="col mr-2 text-center ">お迎え</li>
											<li class="col mr-2 text-center py-1">ご遺体<br>安置</li>
											<li class="col mr-2 text-center py-1">納棺の<br>儀式</li>
											<li class="col border mr-2 text-center py-1">お通夜</li>
											<li class="col border mr-2 text-center py-1">お別れの<br>儀式</li>
											<li class="col mr-2 text-center py-1">告別式</li>
											<li class="col mr-2 text-center py-1">お別れの<br>儀式</li>
											<li class="col text-center py-1">火葬</li>
										</ul>
										<div class="row">
											<div class="col-7">
												<label class="p_feature px-2 mb-0 rounded" for="">プランの特徴</label>
												<p class="">
													&emsp;火葬のみで負担を少なく<br>
													&emsp;家族だけでお見送りを<br>
												</p>
											</div>
										
											<div class="col-5 peoplenumber">
												<label class="p_feature px-2 mb-0 rounded" for="">参拝者数の目安</label>
												<p>
													<label class="pn_num mb-0" for="">&thinsp;20</label>
													<label class="pn_txt mb-0" for="">名程度</label>
												</p>
											</div>
										</div><!-- /.row -->
									</a>
								</div>

								<div class="col list plan_list">
									<a href="planDetails.php">
										<div class="row mb-3 justify-content-center">
											<label class="col-9 px-4 rounded-pill text-center p_ellipse" for="">必要なものを含んだセットプラン</label>
										</div>
										<h4 class="mb-0">一般葬</h4>
										<img src="./images//plan/p1.jpg" alt="">
										<label class="number mb-0" for="">000,000</label>
										<label class="" for="">円(税別)</label>
										<ul class="row mx-1 mb-3 schedule text-center justify-content-center">
											<li class="col mr-2 text-center ">お迎え</li>
											<li class="col mr-2 text-center py-1">ご遺体<br>安置</li>
											<li class="col mr-2 text-center py-1">納棺の<br>儀式</li>
											<li class="col mr-2 text-center py-1">お通夜</li>
											<li class="col mr-2 text-center py-1">お別れの<br>儀式</li>
											<li class="col mr-2 text-center py-1">告別式</li>
											<li class="col mr-2 text-center py-1">お別れの<br>儀式</li>
											<li class="col text-center py-1">火葬</li>
										</ul>
										<div class="row">
											<div class="col-7">
												<label class="p_feature px-2 mb-0 rounded" for="">プランの特徴</label>
												<p class="">
													&emsp;火葬のみで負担を少なく<br>
													&emsp;家族だけでお見送りを<br>
												</p>
											</div>
										
											<div class="col-5 peoplenumber">
												<label class="p_feature px-2 mb-0 rounded" for="">参拝者数の目安</label>
												<p>
													<label class="pn_num mb-0" for="">&thinsp;20</label>
													<label class="pn_txt mb-0" for="">名程度</label>
												</p>
											</div>
										</div><!-- /.row -->
									</a>
								</div>
							</div><!--/.row-->

							<div class="row">
								<div class="col list plan_list">
									<a href="planDetails.php">
										<div class="row mb-3 justify-content-center">
											<label class="col-9 px-4 rounded-pill text-center p_ellipse" for="">必要なものを含んだセットプラン</label>
										</div>
										<h4 class="mb-0">自宅葬</h4>
										<img src="./images//plan/p1.jpg" alt="">
										<label class="number mb-0" for="">000,000</label>
										<label class="" for="">円(税別)</label>
										<ul class="row mx-1 mb-3 schedule text-center justify-content-center">
											<li class="col mr-2 text-center ">お迎え</li>
											<li class="col mr-2 text-center py-1">ご遺体<br>安置</li>
											<li class="col mr-2 text-center py-1">納棺の<br>儀式</li>
											<li class="col border mr-2 text-center py-1">お通夜</li>
											<li class="col border mr-2 text-center py-1">お別れの<br>儀式</li>
											<li class="col border mr-2 text-center py-1">告別式</li>
											<li class="col mr-2 text-center py-1">お別れの<br>儀式</li>
											<li class="col text-center py-1">火葬</li>
										</ul>
										<div class="row">
											<div class="col-7">
												<label class="p_feature px-2 mb-0 rounded" for="">プランの特徴</label>
												<p class="">
													&emsp;火葬のみで負担を少なく<br>
													&emsp;家族だけでお見送りを<br>
												</p>
											</div>
										
											<div class="col-5 peoplenumber">
												<label class="p_feature px-2 mb-0 rounded" for="">参拝者数の目安</label>
												<p>
													<label class="pn_num mb-0" for="">&thinsp;20</label>
													<label class="pn_txt mb-0" for="">名程度</label>
												</p>
											</div>
										</div><!-- /.row -->
									</a>
								</div>
							
								<div class="col list plan_list">
									<a href="planDetails.php">
										<div class="row mb-3 justify-content-center">
											<label class="col-9 px-4 rounded-pill text-center p_ellipse" for="">必要なものを含んだセットプラン</label>
										</div>
										<h4 class="mb-0">直葬</h4>
										<img src="./images//plan/p1.jpg" alt="">
										<label class="number mb-0" for="">000,000</label>
										<label class="" for="">円(税別)</label>
										<ul class="row mx-1 mb-3 schedule text-center justify-content-center">
											<li class="col mr-2 text-center ">お迎え</li>
											<li class="col mr-2 text-center py-1">ご遺体<br>安置</li>
											<li class="col border mr-2 text-center py-1">納棺の<br>儀式</li>
											<li class="col border mr-2 text-center py-1">お通夜</li>
											<li class="col border mr-2 text-center py-1">お別れの<br>儀式</li>
											<li class="col border mr-2 text-center py-1">告別式</li>
											<li class="col border mr-2 text-center py-1">お別れの<br>儀式</li>
											<li class="col text-center py-1">火葬</li>
										</ul>
										<div class="row">
											<div class="col-7">
												<label class="p_feature px-2 mb-0 rounded" for="">プランの特徴</label>
												<p class="">
													&emsp;火葬のみで負担を少なく<br>
													&emsp;家族だけでお見送りを<br>
												</p>
											</div>
										
											<div class="col-5 peoplenumber">
												<label class="p_feature px-2 mb-0 rounded" for="">参拝者数の目安</label>
												<p>
													<label class="pn_num mb-0" for="">&thinsp;20</label>
													<label class="pn_txt mb-0" for="">名程度</label>
												</p>
											</div>
										</div><!-- /.row -->
									</a>
								</div>
							</div>
							<!--/.row-->
						</div><!--/.container-->
					</section><!--/.c2-->
	




					
					<!--<section class="c3">
						<h2>その他プラン</h2>
						<p>その他のプランです。</p>
	
						<div class="container">
							<div class="row">
								<div class="col list plan_list">
									<a href="planDetails.html">
										<div class="row mb-3 justify-content-center">
											<label class="col-8 px-4 rounded-pill text-center p_ellipse" for="">必要なものを含んだセットプラン</label>
										</div>
										<h4 class="mb-0">火葬式</h4>
										<img src="./images//plan/p1.jpg" alt="">
										<label class="number mb-0" for="">000,000</label>
										<label class="" for="">円(税別)</label>
										<ul class="row mx-1 mb-3 schedule text-center justify-content-center">
											<li class="col mr-2 text-center ">お迎え</li>
											<li class="col mr-2 text-center py-1">ご遺体<br>安置</li>
											<li class="col mr-2 text-center py-1">納棺の<br>儀式</li>
											<li class="col border mr-2 text-center py-1">お通夜</li>
											<li class="col border mr-2 text-center py-1">お別れの<br>儀式</li>
											<li class="col border mr-2 text-center py-1">告別式</li>
											<li class="col mr-2 text-center py-1">お別れの<br>儀式</li>
											<li class="col text-center py-1">火葬</li>
										</ul>
										<label class="p_feature px-2 mb-0 rounded" for="">プランの特徴</label>
										<p class="">
											&emsp;火葬のみで負担を少なく<br>
											&emsp;家族だけでお見送りを<br>
										</p>
									</a>
								</div>
								<div class="col list">
									<a href="service2.html">
										<h4>一般総</h4>
										<figure><img src="./images//plan/p1.jpg" alt=""></figure>
										<p>このようなレイアウトになります。</p>
									</a>
								</div>

								<div class="col list">
									<a href="service2.html">
										<h4>自宅葬</h4>
										<figure><img src="./images//plan/p1.jpg" alt=""></figure>
										<p>このようなレイアウトになります。</p>
									</a>
								</div>
							</div><!--/.row--
							<div class="row">
								<div class="col list">
									<a href="service2.html">
										<h4>〇〇プラン</h4>
										<figure><img src="./images//plan/p1.jpg" alt=""></figure>
										<p>このようなレイアウトになります。</p>
									</a>
								</div>
								<div class="col list">
									<a href="service2.html">
										<h4>〇〇プラン</h4>
										<figure><img src="./images//plan/p1.jpg" alt=""></figure>
										<p>このようなレイアウトになります。</p>
									</a>
								</div>

								<div class="col list">
									<a href="service2.html">
										<h4>〇〇プラン</h4>
										<figure><img src="./images//plan/p1.jpg" alt=""></figure>
										<p>このようなレイアウトになります。</p>
									</a>
								</div>
							</div><!--/.row--
						</div><!--/.container--

					</section><!--/.c3-->

				</div><!--/.main-->
			</div><!--/.inner-->
		</div><!--/.contents-->

	<footer id="footer">
		<?php $_smarty_tpl->_subTemplateRender('file:./../../../html/include/footer.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</footer>
</body>
</html><?php }
}
