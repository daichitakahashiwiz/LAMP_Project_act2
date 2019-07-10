<?php
/* Smarty version 3.1.33, created on 2019-07-05 13:12:52
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/planConfirmation.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1ece4450d744_75254999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b92eb1ae2c3bb9c793e6fa2291a56c7b4007d6f' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/planConfirmation.tmpl',
      1 => 1562236231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../html/include/header.tmpl' => 1,
    'file:./../../../html/include/footer.tmpl' => 1,
  ),
),false)) {
function content_5d1ece4450d744_75254999 (Smarty_Internal_Template $_smarty_tpl) {
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
        a.plan {
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
            <section class="">
                <h2>プラン申し込み確認</h2>
                <div class="container">
                    <h4>プラン内容</h4>
                    <form class="mx-5">
                        <div class="form-group row mb-3">
                            <label class="col-sm-10 col-form-label">なんちゃらぷらん　3年パック</label>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-sm-10 col-form-label">なんちゃらなんちゃらなんちゃら</label>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-sm-10 col-form-label">なんちゃらなんちゃらなんちゃら</label>
                        </div>
                    </form>
                    <!--/.form-->
                    <h4 class=mt-5>お見積り詳細</h4>
                    <form class="mx-5">
                        <div class="form-group row mb-3">
                            <label class="col-sm-10 col-form-label">基本料金</label>
                            <label class="col-sm-2 col-form-label">￥000,000</label>
                        </div>
                        <div class="form-group row mb-3 border-bottom">
                            <label class="col-sm-10 col-form-label">追加料金</label>
                            <label class="col-sm-2 col-form-label">￥000,000</label>
                        </div>
                        <div class="form-group row mb-5">
                            <label class="col-sm-10 col-form-label mb-3 text-right text-danger">合計金額:
                            </label>
                            <label class="col-sm-2 col-form-label mb-3 text-danger">￥000,000</label>
                        </div>
                    </form><!--/.form-->


                    <ul class="row my-5 passbtn" id="ubutton">
                        <li class="col text-center"><a href="./planConfirmation.php">プランを確定する</a></li>
                    </ul>


                    <div class="row">




                        <!-- <table class="ta1">
                            <tr>
                                <th colspan="5" class="tamidashi">プラン内容</th>
                            </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <td>なんちゃらプラン　3カ月</td>
                                </tr>
                                <tr>
                                    <td>なんちゃらプラン　3カ月</td>
                                </tr>
                                <tr>
                                    <td>なんちゃらプラン　3カ月</td>
                                </tr>
                            <tr>
                                <td colspan="5" class="l">
                                    <ul class="disc">
                                        <li>なんちゃらプラン　3カ月</li>
                                        <li>なんちゃらプラン　3カ月</li>
                                        <li>なんちゃらプラン　3カ月</li>
                                        <li>なんちゃらプラン　3カ月</li>
                                    </ul>
                                </td>
                            </tr>
                        </table> -->

   



                        <!-- <table class="ta1">
                            <tr>
                                <th colspan="2" class="tamidashi">お見積り詳細</th>
                            </tr>
                            <tr>
                                <th>見出し</th>
                                <td>ここに説明を入れます。</td>
                            </tr>
                            <tr>
                                <th>見出し</th>
                                <td>ここに説明を入れます。</td>
                            </tr>
                            <tr>
                                <th>見出し</th>
                                <td>ここに説明を入れます。</td>
                            </tr>
                            <tr>
                                <th>見出し</th>
                                <td>ここに説明を入れます。</td>
                            </tr>
                            <tr>
                                <th>見出し</th>
                                <td>ここに説明を入れます。</td>
                            </tr>
                        </table> -->
 
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </section>
        </div>
        <!--/.inner-->
    </div>
    <!--/.contents-->

    <footer id="footer">
        <?php $_smarty_tpl->_subTemplateRender('file:./../../../html/include/footer.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </footer>
</body>

</html><?php }
}
