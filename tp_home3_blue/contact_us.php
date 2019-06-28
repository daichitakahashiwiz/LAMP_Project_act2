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
            $("#footer").load("./html/include/footer.html");
        });
    </script>

</head>

<body>
    <header id="header"></header>
    <div class="contents">
        <div class="inner">

            <div class="main">

                <section>

                    <h2>お問い合わせ</h2>
                    <!-- <p>当ページと同じ３項目のお問い合わせフォーム（自動フォーム試用版）を簡単に使えるようにセットしています。<br>
	<span style="color: red;">※当ページ（contact.html）はフォームの見本ページです。実際の自動フォームには使いませんのでご注意下さい。</span></p>
	<p><strong class="color1">■自動フォームを使う場合（※編集に入る前にご確認下さい）</strong><br>
	あなたのメールアドレス設定と、簡単な編集だけで使えます。<a href="http://template-party.com/file/formgen_manual_set2.html" target="_blank">こちらのマニュアルをご覧下さい。</a></p>
	<p><strong class="color1">■自動フォームを使わない場合</strong><br>
	テンプレートに梱包されている「form.html」「confirm.html」「finish.html」の3枚のファイルを削除して下さい。</p> -->

                    <table class="ta1">
                        <tr>
                            <th>お名前※</th>
                            <td><input type="text" name="お名前" size="30">
                            </td>
                        </tr>
                        <tr>
                            <th>メールアドレス※</th>
                            <td><input type="text" name="メール" size="20"> ＠ <input type="text" name="アドレス" size="10">
                            </td>
                        </tr>
                        <tr>
                            <th>メールアドレス(再確認)※</th>
                            <td><input type="text" name="メール2" size="20"> ＠ <input type="text" name="アドレス2" size="10">
                            </td>
                        </tr>
                        <tr>
                            <th>お問い合わせ内容※</th>
                            <td><textarea name="お問い合わせ詳細" cols="30" rows="10" class="wl"></textarea></td>
                        </tr>
                    </table>



                    <a href="contact_us_confirmation.php"><p class="c">
                        <input type="submit" value="内容を確認する" class="btn">
                    </p></a>


                </section>

            </div>
            <!--/main-->

        </div>
    </div>
    <p id="pagetop" class="inner"><a href="#">↑</a></p>


    <footer id="footer"></footer>
</body>

</html>