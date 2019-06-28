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
	<link type="text/css" rel="stylesheet" href="./css/bmesse.css" />
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
		a.user,
		a.chat {
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
														<div class="bms_message_text"><p class="w-nomal">猪狩君ってどんな人？</p></div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<!--メッセージ２（右側）-->
											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">ヤニカス</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">ホモ</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">酒乱</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">手汗</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">ガイジ</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">やまにー</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">椅子クラッシャー</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text">社畜</div>
													</div>
												</div>
											</div>
											<div class="bms_clear"></div><!-- 回り込みを解除（スタイルはcssで充てる） -->

											<div class="bms_message bms_right">
												<div class="bms_message_box">
													<div class="bms_message_content">
														<div class="bms_message_text"></div>
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


	<footer id="footer"></footer>
</body>

</html>