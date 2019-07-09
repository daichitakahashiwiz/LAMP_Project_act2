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
	
</head>
<body>
    <header id="header"></header>
    

	<div class="contents">
		<div class="inner">
			<div class="main">
				<div class="container login-container">
					<div class="row">
						<div class="col-md-6 login-form-2">
							<h1>パスワードの再設定</h1>
								<form action="login_update2.php" >
									<!-- <div class="alert alert-dismissible alert-danger">
										<strong>メールアドレスまたはパスワードが正しくありません</strong> 
									</div> -->
									<div class="form-group"  >
										<input type="text" class="form-control" placeholder="メールアドレス*" value="" />
									</div>
									<!-- <div class="form-group">
										<input type="password" class="form-control" placeholder="パスワード*" value="" />
									</div> -->
									<div class="form-group"  href="login_update2.php">
										<input type="submit" href="login_update2.php" action="login_update2.php" class="btnSubmit" value="送信" />
                                        <a href="login_update2.php"></a>
									</div>

                                    <script>
                                    function checkText() {
                                    //actionメソッドに遷移先のURLを代入する
        　                          document.myform.action = "login_update2.php";
                                    }
                                    </script>

									<!-- <div class="form-group">
										<a href="#" class="ForgetPwd" value="Login">パスワードを忘れた方はこちら</a>
									</div>
									<div class="form-group">
											<a href="member_create.php" class="NewPwd" value="Login">新規作成はこちら</a>
									</div> -->
								</form>
						</div>
					</div>		
				</div>							   
			</div>
			<!--/main-->
		</div><!--/.inner-->
	</div><!--/.contents-->

	<p id="pagetop" class="inner"><a href="#">↑</a></p>


	<footer id="footer"></footer>
</body>
</html>