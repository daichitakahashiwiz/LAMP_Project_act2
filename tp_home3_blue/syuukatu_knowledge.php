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
		a.knowledge{
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
                    <h2>終活の知識一覧</h2>
                    <div class="list">
                        <a href="syuukatu_knowledge_detail1.php"></a>
                            <h4>生前整理について</h4>
                            <!-- <figure><img src="images/sample1.jpg" alt="" class="fr"></figure>
                            <p>ここにテキストを入れます。サンプルテキスト。専門の調理師が献立を作っております。サンプルテキスト。サンプルテキスト。</p> -->
                        </a>
                    </div>
                     <div class="list">
                        <a href="syuukatu_knowledge_detail2.php">
                            <h4>お墓について</h4>
                            <!-- <figure><img src="images/sample1.jpg" alt="" class="fr"></figure>
                            <p>ここにテキストを入れます。サンプルテキスト。専門の調理師が献立を作っております。サンプルテキスト。サンプルテキスト。</p> -->
                        </a>
                    </div>
                     <div class="list">
                        <a href="syuukatu_knowledge_detail3.php">
                            <h4>遺言書の役割と内容</h4>
                            <!-- <figure><img src="images/sample1.jpg" alt="" class="fr"></figure>
                            <p>ここにテキストを入れます。サンプルテキスト。専門の調理師が献立を作っております。サンプルテキスト。サンプルテキスト。</p> -->
                        </a>
                    </div>
                     <div class="list">
                        <a href="syuukatu_knowledge_detail4.php">
                            <h4>エンディングノートについて</h4>
                            <!-- <figure><img src="images/sample1.jpg" alt="" class="fr"></figure>
                            <p>ここにテキストを入れます。サンプルテキスト。専門の調理師が献立を作っております。サンプルテキスト。サンプルテキスト。</p> -->
                        </a>
                    </div>
                </section>

                
            </div>
            <!--/main-->
            <!-- 
            <div class="sub">

                <nav class="box1">
                    <h2>Menu</h2>
                    <ul class="submenu">
                        <li><a href="company.html">会社概要</a></li>
                        <li><a href="recruit.html">介護スタッフ募集中</a></li>
                    </ul>
                </nav>

                <section class="box1">
                    <h2>サンプルホーム</h2>
                    <p class="box2">東京都XX区XXXX<br>
                        TEL：0120-0000-0000<br>
                        受付：午前9時〜午後7時</p>
                </section>

                <section class="box1">
                    <h2>この見出しはh2タグです</h2>
                    <p>このボックスは、class="box1"と指定すれば出ます。</p>
                </section>

                <section>
                    <h2>boxの外も使えます</h2>
                    <ul class="submenu">
                        <li><a href="#">メニューサンプル</a></li>
                        <li><a href="#">メニューサンプル</a></li>
                        <li><a href="#">メニューサンプル</a></li>
                    </ul>
                </section> -->

            </div>
            <!--/sub-->

        </div>
        <!--/inner-->
    </div>
    <!--/contents-->

    <!-- <div class="contents bg1">
        <div class="inner">

            <section>

                <h2>サービスのご案内（１カラムレイアウトでの使用例）</h2>

                <div class="list">
                    <a href="service2.html">
                        <h4>ここはh4見出し</h4>
                        <figure><img src="images/sample1.jpg" alt="" class="fr"></figure>
                        <p>ここにテキストを入れます。サンプルテキスト。専門の調理師が献立を作っております。サンプルテキスト。サンプルテキスト。</p>
                    </a>
                </div>

                <div class="list">
                    <h4>リンクを設定しないと</h4>
                    <figure><img src="images/sample1.jpg" alt="" class="fl"></figure>
                    <p>このブロックのように、ボックス右下の矢印マークが出なくなります。<br>
                        写真のサイズや見出しのデザインなどはcssフォルダのstyle.cssで行なって下さい。<br>
                        imgタグにfrやflのclass指定をすると、画像が右寄り(fr)や、左寄り(fl)になります。詳しくはhtml側を見て下さい。</p>
                </div>

                <div class="list">
                    <a href="service2.html">
                        <h4>画像のclass指定を外すと</h4>
                        <figure><img src="images/sample1.jpg" alt=""></figure>
                        <p>このようなレイアウトになります。</p>
                    </a>
                </div>

            </section>

            <section class="c2">

                <div class="list">
                    <a href="service2.html">
                        <h4>ここはh4見出し</h4>
                        <figure><img src="images/sample1.jpg" alt="" class="fr"></figure>
                        <p>ここにテキストを入れます。サンプルテキスト。専門の調理師が献立を作っております。サンプルテキスト。サンプルテキスト。</p>
                    </a>
                </div>

                <div class="list">
                    <h4>リンクを設定しないと</h4>
                    <figure><img src="images/sample1.jpg" alt="" class="fl"></figure>
                    <p>このブロックのように、ボックス右下の矢印マークが出なくなります。<br>
                        写真のサイズや見出しのデザインなどはcssフォルダのstyle.cssで行なって下さい。<br>
                        imgタグにfrやflのclass指定をすると、画像が右寄り(fr)や、左寄り(fl)になります。詳しくはhtml側を見て下さい。</p>
                </div>

                <div class="list">
                    <a href="service2.html">
                        <h4>画像のclass指定を外すと</h4>
                        <figure><img src="images/sample1.jpg" alt=""></figure>
                        <p>このようなレイアウトになります。</p>
                    </a>
                </div>

                <div class="list">
                    <h4>画像のclass指定を外すと</h4>
                    <figure><img src="images/sample1.jpg" alt=""></figure>
                    <p>このようなレイアウトになります。</p>
                </div>

            </section>
            /c2-->

            <!-- <section class="c3">

                <div class="list">
                    <a href="service2.html">
                        <h4>ここはh4見出し</h4>
                        <figure><img src="images/sample1.jpg" alt="" class="fr"></figure>
                        <p>ここにテキストを入れます。サンプルテキスト。専門の調理師が献立を作っております。サンプルテキスト。サンプルテキスト。</p>
                    </a>
                </div>

                <div class="list">
                    <h4>リンクを設定しないと</h4>
                    <p>このブロックのように、ボックス右下の矢印マークが出なくなります。画像も外してもらってもOK。</p>
                </div>

                <div class="list">
                    <a href="service2.html">
                        <h4>ここはh4見出し</h4>
                        <figure><img src="images/sample1.jpg" alt="" class="fl"></figure>
                        <p>ここにテキストを入れます。サンプルテキスト。専門の調理師が献立を作っております。サンプルテキスト。サンプルテキスト。</p>
                    </a>
                </div>

                <div class="list">
                    <a href="service2.html">
                        <h4>画像のclass指定を外すと</h4>
                        <figure><img src="images/sample1.jpg" alt=""></figure>
                        <p>このようなレイアウトになります。</p>
                    </a>
                </div>

                <div class="list">
                    <h4>画像のclass指定を外すと</h4>
                    <figure><img src="images/sample1.jpg" alt=""></figure>
                    <p>このようなレイアウトになります。</p>
                </div>

                <div class="list">
                    <a href="service2.html">
                        <h4>画像のclass指定を外すと</h4>
                        <figure><img src="images/sample1.jpg" alt=""></figure>
                        <p>このようなレイアウトになります。</p>
                    </a>
                </div>

            </section>
            </c3-->

        <!-- </div> -->
        <!--/inner-->
    <!-- </div> -->
    <!--/contents-->


	

	<p id="pagetop" class="inner"><a href="#">↑</a></p>


	<footer id="footer"></footer>
</body>
</html>