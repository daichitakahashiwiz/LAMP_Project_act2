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
	<script type="text/javascript" src="./js/app.js"></script>
	<!-- Font Awesome (朱里のkit) -->
	<script src="https://kit.fontawesome.com/a1bcba65a0.js"></script>
	<!-- HTMLの呼び出し -->
	<script>
		$(function () {
			$("#header").load("./html/include/header.html");
			// $("#main").load("html/main.html");
			$("#footer").load("./html/include/footer.html");
		});
	</script>
	<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
	<style>
		a.index {
			background: #2b3f7f;
			color: #fff;
		}
	</style>
</head>

<body>
	<header id="header"></header>


	<div class="contents">
		<div class="inner">

			<div class="main">

				<section>

					<h2>会員情報入力</h2>
					<!-- <p>当ページと同じ３項目のお問い合わせフォーム（自動フォーム試用版）を簡単に使えるようにセットしています。<br>
	<span style="color: red;">※当ページ（contact.html）はフォームの見本ページです。実際の自動フォームには使いませんのでご注意下さい。</span></p>
	<p><strong class="color1">■自動フォームを使う場合（※編集に入る前にご確認下さい）</strong><br>
	あなたのメールアドレス設定と、簡単な編集だけで使えます。<a href="http://template-party.com/file/formgen_manual_set2.html" target="_blank">こちらのマニュアルをご覧下さい。</a></p>
	<p><strong class="color1">■自動フォームを使わない場合</strong><br>
	テンプレートに梱包されている「form.html」「confirm.html」「finish.html」の3枚のファイルを削除して下さい。</p> -->

					<table class="ta1">
						<tr>
							<th>お名前※</th>
							<td> 姓 <input type="text" name="お名前" size="15"> 名 <input type="text" name="お名前" size="15">
							</td>
						</tr>
						<tr>
							<th>お名前(カナ)※</th>
							<td> セイ <input type="text" name="お名前(カナ)" size="15"> メイ <input type="text" name="お名前"
									size="15"></td>
						</tr>

						<!-- style="border :1px solid #eee; font-size :25px;" -->

						<script src="js/getDate.js"></script>
						
						<tr>
							<th>生年月日</th>
							<td><a id="year"></a><a id="month"></a><a id="day"></a></td>
						</tr>

						<tr>
							<th>郵便番号※</th>
							<td><input type="text" name="zip31" size="4" maxlength="3"> － <input type="text" name="zip32" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip31','zip32','pref31','addr31','addr31');"></td>
						</tr>

						<tr>
							<th>都道府県※</th>
							<td>
							<input type="text" name="pref31" size="20">
							</td>
						</tr>

						<tr>
							<th>市区町村、番地※</th>
							<td><input type="text" name="addr31" size="40"></td>
						</tr>

						<tr>
							<th>ビル名、マンション名※</th>
							<td><input type="text" name="ビル名、マンション名" size="30" class="ws"></td>
						</tr>

						<tr>
							<th>性別※</th>
							<td>
								<input type="radio" name="q2" value="男" checked> 男
								<input type="radio" name="q2" value="女"> 女
								<input type="radio" name="q2" value="その他"> その他
							</td>
						</tr>

						<tr>
							<th>電話番号1※</th>
							<td><input type="text" name="電話" size="4"> ー <input type="text" name="番" size="4"> ー <input
									type="text" name="郷" size="4"></td>
						</tr>

						<tr>
							<th>電話番号2※</th>
							<td><input type="text" name="電話2" size="4"> ー <input type="text" name="番2" size="4"> ー
								<input type="text" name="郷2" size="4"></td>
						</tr>

						<tr>
							<th>メールアドレス1※</th>
							<td><input type="text" name="メール" size="20"> ＠ <input type="text" name="アドレス" size="10">
							</td>
						</tr>

						<tr>
							<th>メールアドレス2</th>
							<td><input type="text" name="メール2" size="20"> ＠ <input type="text" name="アドレス2" size="10">
							</td>
						</tr>

						<tr>
							<th>パスワード※</th>
							<td><input type="password" name="パスワード" size="30" class="ws"></td>
						</tr>

						<tr>
							<th>パスワード(再確認)※</th>
							<td><input type="password" 　 name="パスワード(再確認)" size="30" class="ws"></td>
						</tr>

						<!-- <tr>
	<th>お問い合わせ詳細※</th>
	<td><textarea name="お問い合わせ詳細" cols="30" rows="10" class="wl"></textarea></td>
	</tr> -->
					</table>



					<p class="c"><a href="member_create_confirmation.php">
							<input type="submit" value="内容を確認する" class="btn">
					</p>

				</section>

			</div>
			<!--/main-->

		</div>
	</div>

	<p id="pagetop" class="inner"><a href="#">↑</a></p>



	<footer id="footer"></footer>

	<!--メニュー開閉ボタン-->
	<div id="menubar_hdr" class="close"></div>
	<!--メニューの開閉処理条件設定　800px以下-->
	<script type="text/javascript">
		if (OCwindowWidth() <= 800) {
			open_close("menubar_hdr", "menubar-s");
		}
	</script>


</body>

</html>