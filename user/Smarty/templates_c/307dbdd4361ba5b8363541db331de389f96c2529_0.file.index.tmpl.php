<?php
/* Smarty version 3.1.33, created on 2019-07-08 14:14:18
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/index.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d22d12aab1574_29017759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dbdd4361ba5b8363541db331de389f96c2529' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/index.tmpl',
      1 => 1562562848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../html/include/header.tmpl' => 1,
    'file:./../../../html/include/footer.tmpl' => 1,
  ),
),false)) {
function content_5d22d12aab1574_29017759 (Smarty_Internal_Template $_smarty_tpl) {
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
			$("#footer").load("./html/include/footer.html");
		});
	<?php echo '</script'; ?>
> -->
	<style>
		a.index {
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

	<!-- スライドショー -->
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div id="carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-example" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example" data-slide-to="1"></li>
						<li data-target="#carousel-example" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" style="height: 700px;">
						<div class="carousel-item active">
							<img class="d-block w-100" src="./images/slide/s1.jpg" alt="スライドA">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="./images/slide/s2.jpg" alt="スライドB">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="./images/slide/s3.jpg" alt="スライドC">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div><!-- .carousel -->
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->

	<div class="inner">

		<!-- うたい文句 -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="list text-center unsubscribedone mx-0 my-0 mt-5">
							<h4>最後の最後まで自分らしく・・・</h4>
							<h4><?php echo $_SESSION['DTeam_user']['user_name'];?>
さん</h4>
							<p>自分の最後は自分で決められます<br />あなたの人生最後の門出をサポートします</p>
						</div>
					</div>

				</div>
				<!--/.row-->

			</div>
			<!--/.container-->
		</section>

		<section class="c3 mt-4">
			<div class="container">
				<div class="row">
					<div class="col list">
						<h4>まずはお電話</h4>
						<label class="number" for="">0120-333-906</label>
					</div>
					<div class="col list login">
						<h4>会員登録</h4>
						<ul class="row passbtn text-center" id="ubutton">
							<li class="col text-center pb-0"><a href="">登録済ませている方<br>ログイン</a></li>
						</ul>
					</div>
					<div class="col list">
						<h4>まずはお電話</h4>
					</div>
				</div>
				<!--/.row-->
			</div>
			<!--/.container-->

		</section>

	</div>
	<!--/.inner-->



	<!-- プラン -->
	<div class="contents pb-0">
		<div class="inner">
			<section class="c3">
				<h2>プラン</h2>
				<div class="container">
					<div class="row">

						<div class="col list plan_list">
							<a href="planDetails.php">
								<div class="row mb-3 justify-content-center">
									<label class="col-10 px-0 rounded-pill text-center p_ellipse" for="">必要なものを含んだセットプラン</label>
								</div>
								<h4 class="mb-0">火葬式</h4>
								<img src="./images//plan/p1.jpg" alt="">
								<label class="number mb-1" for="">000,000</label>
								<label class="m-0" for="">円(税別)</label>
								<div class="row mt-3">
									<div class="col-8">
										<label class="p_feature px-2 mb-0 rounded" for="">プランの特徴</label>
										<p class="p_feature_txt">
											&emsp;火葬のみで負担を少なく<br>
											&emsp;家族だけでお見送りを<br>
										</p>
									</div>
									<div class="col-4 peoplenumber">
										<label class="p_feature px-2 mb-0 rounded" for="">参拝者目安</label>
										<p>
											<label class="pn_num mb-0" for="">&thinsp;20</label>
											<label class="pn_txt mb-0" for="">名</label>
										</p>
									</div>
								</div><!-- /.row -->
							</a>
						</div>

						<div class="col list plan_list">
							<a href="planDetails.php">
								<div class="row mb-3 justify-content-center">
									<label class="col-10 px-0 rounded-pill text-center p_ellipse" for="">必要なものを含んだセットプラン</label>
								</div>
								<h4 class="mb-0">火葬式</h4>
								<img src="./images//plan/p1.jpg" alt="">
								<label class="number mb-1" for="">000,000</label>
								<label class="m-0" for="">円(税別)</label>
								<div class="row mt-3">
									<div class="col-8">
										<label class="p_feature px-2 mb-0 rounded" for="">プランの特徴</label>
										<p class="p_feature_txt">
											&emsp;火葬のみで負担を少なく<br>
											&emsp;家族だけでお見送りを<br>
										</p>
									</div>
									<div class="col-4 peoplenumber">
										<label class="p_feature px-2 mb-0 rounded" for="">参拝者目安</label>
										<p>
											<label class="pn_num mb-0" for="">&thinsp;20</label>
											<label class="pn_txt mb-0" for="">名</label>
										</p>
									</div>
								</div><!-- /.row -->
							</a>
						</div>

						<div class="col list plan_list">
							<a href="planDetails.php">
								<div class="row mb-3 justify-content-center">
									<label class="col-10 px-0 rounded-pill text-center p_ellipse" for="">必要なものを含んだセットプラン</label>
								</div>
								<h4 class="mb-0">火葬式</h4>
								<img src="./images//plan/p1.jpg" alt="">
								<label class="number mb-1" for="">000,000</label>
								<label class="m-0" for="">円(税別)</label>
								<div class="row mt-3">
									<div class="col-8">
										<label class="p_feature px-2 mb-0 rounded" for="">プランの特徴</label>
										<p class="p_feature_txt">
											&emsp;火葬のみで負担を少なく<br>
											&emsp;家族だけでお見送りを<br>
										</p>
									</div>
									<div class="col-4 peoplenumber">
										<label class="p_feature px-2 mb-0 rounded" for="">参拝者目安</label>
										<p>
											<label class="pn_num mb-0" for="">&thinsp;20</label>
											<label class="pn_txt mb-0" for="">名</label>
										</p>
									</div>
								</div><!-- /.row -->
							</a>
						</div>

					</div>
					<!--/.row-->
				</div>
				<!--/.container-->
				<ul class="row passbtn" id="ubutton">
					<li class="col text-right pr-5"><a href="./plan.php">プランをもっと見る</a></li>
				</ul>
			</section>
		</div>
		<!--/.inner-->
	</div>
	<!--/.contents-->

	<!-- 終活知識 -->
	<div class="contents pb-0">
		<div class="inner">
			<section class="c3">
				<h2>終活の知識</h2>
				<div class="container">
					<div class="row">
						<div class="col list">
							<figure><img src="./images/plan/p1.jpg" alt=""></figure>
							<h4 align="center">プラン1</h4>
							<p>ここにテキストを入れます。サンプルテキスト。専門の調理師が献立を作っております。サンプルテキスト。サンプルテキスト。</p>
						</div>
						<div class="col list">
							<figure><img src="./images/plan/p1.jpg" alt=""></figure>
							<h4 align="center">プラン2</h4>
							<p>ここにテキストを入れます。サンプルテキスト。専門の調理師が献立を作っております。サンプルテキスト。サンプルテキスト。</p>
						</div>
						<div class="col list">
							<figure><img src="./images/plan/p1.jpg" alt=""></figure>
							<h4 align="center">プラン3</h4>
							<p>ここにテキストを入れます。サンプルテキスト。専門の調理師が献立を作っております。サンプルテキスト。サンプルテキスト。</p>
						</div>
					</div>
					<!--/.row-->
				</div>
				<!--/.container-->
				<ul class="row passbtn" id="ubutton">
					<li class="col text-right pr-5"><a href="./syuukatu_knowledge.php">終活知識をもっと見る</a></li>
				</ul>
			</section>
		</div><!--/.inner-->
	</div><!--/.contents-->

	<!-- よくある質問 -->
	<div class="contents pb-0">
		<div class="inner">
			<section class="c3">
				<h2>よく頂く質問</h2>
				<div class="container">
					<div class="row">
						<div class="col list">
							<div class="col">
								<div class="faqbox q m-0">Q</div>
								<p>プラン料金以外に、追加料金はかからないのですか？</p>
							</div>
							<div class="faqbox a m-0">A</div>
							<p>プラン内には、基本的に葬儀に必要となる物品が含まれており、表記している金額でお葬式を行うことができます。
							但し、以下のようなケースにおいては追加費用がかかる場合がありますのでご注意ください。</p>
						</div>
						<div class="col list">
							<div class="col">
								<div class="faqbox q m-0">Q</div>
								<p>プラン料金以外に、追加料金はかからないのですか？</p>
							</div>
							<div class="faqbox a m-0">A</div>
							<p>プラン内には、基本的に葬儀に必要となる物品が含まれており、表記している金額でお葬式を行うことができます。
								但し、以下のようなケースにおいては追加費用がかかる場合がありますのでご注意ください。</p>
						</div>
						<div class="col list">
							<div class="col">
								<div class="faqbox q m-0">Q</div>
								<p>プラン料金以外に、追加料金はかからないのですか？</p>
							</div>
							<div class="faqbox a m-0">A</div>
							<p>プラン内には、基本的に葬儀に必要となる物品が含まれており、表記している金額でお葬式を行うことができます。
								但し、以下のようなケースにおいては追加費用がかかる場合がありますのでご注意ください。</p>
						</div>
					</div>
					<!--/.row-->
				</div>
				<!--/.container-->
				<ul class="row passbtn" id="ubutton">
					<li class="col text-right pr-5"><a href="./faq.php">よくある質問をもっと見る</a></li>
				</ul>
			</section>
		</div><!--/.inner-->
	</div><!--/.contents-->



	<p id="pagetop" class="inner"><a href="#">↑</a></p>



	<footer id="footer">
		<?php $_smarty_tpl->_subTemplateRender('file:./../../../html/include/footer.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</footer>

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


</body>

</html><?php }
}
