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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Bootstrap core js -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<!-- css,jsの呼び出し -->
	<link type="text/css" href="./css/import.css" rel="stylesheet" media="all" />
	<link type="text/css" rel="stylesheet" href="./css/check.css" />
	<script type="text/javascript" src="./js/app.js"></script>
	<!-- Font Awesome (朱里のkit) -->
	<script src="https://kit.fontawesome.com/a1bcba65a0.js"></script>
	<!-- HTMLの呼び出し -->
	<script>
		$(function () {
			$("#header").load("./html/include/header.html");
			$("#usermenubar").load("./html/include/usermenubar.html");
			$("#footer").load("./html/include/footer.html");
		});
	</script>
	<style>
		a.user,a.check{
			background: #2b3f7f;
			color: #fff;
		}
	</style>
</head>

<body>
	<header id="header"></header>


	<div class="user container-fluid">
		<div class="row usermenubar">

			<div class="col-2 usermenubar sub p-0">
				<div id="usermenubar"></div>
			</div>

			<div class="col-10 main-content contents">
				<div class="inner">
					<!-------------------------------------

						ここから右の青いとこだよ！！！！
						青いのは2個上のdivタグのクラスの
						bg-primaryを消すと白くなるよ！！！！！

					--------------------------------------->

					<section class="c3">
					<!-- <div class="progress" style="height: 1px;">
					 <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div> 
					</div> -->
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-4">
							全体進捗率
								<div class="progress" style="height: 30px;">
									<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
								</div>
							</div>
						</div><!--/.row-->
					</div><!--/.container-->
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-4">
							進捗率１
								<div class="progress" style="height: 30px;">
									<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
								</div>
							</div>
						</div><!--/.row-->
					</div><!--/.container-->
					
					<section class="c3">
						<div class="container">
							<div class="row">
								<div class="col-sm-1 col-0">

								</div>
								<div class="box2 col-sm-4 col-4">
									<p><input type="checkbox" name="zyunbi01" value="2">テキスト</p>　
								</div>
								<div class="col-sm-1 col-0">

								</div>
								<div class="box2 col-sm-4 col-4">
									<p><input type="checkbox" name="zyunbi01" value="2">テキスト</p>　
								</div>
								
							
							</div><!--/.row-->
							<div class="row">
								<div class="col-sm-1 col-0">

								</div>
								<div class="box2 col-sm-4 col-4">
									<p><input type="checkbox" name="zyunbi01" value="2">テキスト</p>　
								</div>
								<div class="col-sm-1 col-0">

								</div>
								<div class="box2 col-sm-4 col-4">
									<p><input type="checkbox" name="zyunbi01" value="2">テキスト</p>　
								</div>
								
							
							</div><!--/.row-->
						</div>
						
						<div class="container">
							<div class="row">
								<div class="col-sm-12 col-4">
									進捗率２
									<div class="progress" style="height: 30px;">
										<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
				 					</div>
								</div>
							</div><!--/.row-->
						</div><!--/.container-->
						<div class="container">
							<div class="row">
								<div class="col-sm-1 col-0">

								</div>
								<div class="box2 col-sm-4 col-4">
									<p><input type="checkbox" name="zyunbi01" value="2">テキスト</p>　
								</div>
								<div class="col-sm-1 col-0">

								</div>
								<div class="box2 col-sm-4 col-4">
									<p><input type="checkbox" name="zyunbi01" value="2">テキスト</p>　
								</div>
							</div><!--/.row-->
						</div><!--/.container-->
					</div>
				</div><!--/.inner-->
			</div><!--/.contents-->
		</div><!--/.row.usermenubar-->
	</div><!--/.user.container-fluid-->

	
	<footer id="footer"></footer>
</body>

</html>