<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>株式会社 猪狩典礼 ～終活支援サービスサイト～</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="終活をサポートするサイトです">
	<link rel="alternate stylesheet" href="css/change.css" title="change">
	<script type="text/javascript" src="js/openclose.js"></script>
	<script type="text/javascript" src="js/ddmenu_min.js"></script>
	<script type="text/javascript" src="js/styleswitcher.js"></script>

	<!-- jQueryの呼び出し -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Bootstrap core js -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- css,jsの呼び出し -->
	<link type="text/css" href="./css/import.css" rel="stylesheet" media="all" />
	<script type="text/javascript" src="./js/app.js"></script>
	<!-- Font Awesome (朱里のkit) -->
	<script src="https://kit.fontawesome.com/a1bcba65a0.js"></script>
	<!-- HTMLの呼び出し -->
	<script>
		$(function () {
			$("#header").load("./html/include/header.html");
			$("#footer").load("./html/include/footer.html");
		});
	</script>
	<style>
		a.user{
			background: #2b3f7f;
			color: #fff;
		}
	</style>
</head>
<body>
	<header id="header"></header>
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

	<footer id="footer"></footer>
</body>
</html>