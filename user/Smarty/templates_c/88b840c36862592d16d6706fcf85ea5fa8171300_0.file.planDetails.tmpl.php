<?php
/* Smarty version 3.1.33, created on 2019-07-09 12:08:41
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/planDetails.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d240539bb4ac6_99544312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88b840c36862592d16d6706fcf85ea5fa8171300' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/planDetails.tmpl',
      1 => 1562641707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../html/include/header.tmpl' => 1,
    'file:./../../../html/include/footer.tmpl' => 1,
  ),
),false)) {
function content_5d240539bb4ac6_99544312 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="main">
                <section class="c1">
                    <h2>プラン詳細</h2>

                    <div class="container">
                        <div class="list plan_list">
                            <div class="row mb-3 justify-content-center">
                                <label class="col-10 px-4 rounded-pill text-center p_ellipse" for="">必要なものを含んだセットプラン</label>
                            </div>
                            <h4 class="mb-0">火葬式</h4>
                            <figure><img src="./images/plan/p1.jpg" alt="" class="fr"></figure>
                            <label class="number mb-0" for="">000,000</label>
                            <label class="" for="">円(税別)</label>
                            <ul class="row ml-1 mb-3 mt-5 pr-2 justify-contet-center schedule_d">
                                <li class="col mr-2 text-center py-3">お迎え</li>
                                <li class="col mr-2 text-center py-3">ご遺体安置</li>
                                <li class="col mr-2 text-center py-3">納棺の儀式</li>
                                <li class="col border mr-2 text-center py-3">お通夜</li>
                                <li class="col border mr-2 text-center py-3">お別れの儀式</li>
                                <li class="col border mr-2 text-center py-3">告別式</li>
                                <li class="col mr-2 text-center py-3">お別れの儀式</li>
                                <li class="col mr-2 text-center py-3">火葬</li>
                            </ul>
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
                            <p>お通夜・告別式を行わず、火葬のみを執り行います。内容はコンパクトですが、「納棺の儀式」や「お別れの儀式」など、故人さまへの感謝の気持ちを伝えるために必要なものが揃っています。</p>
                        </div><!--/.list-->




                        <!-- <table class="ta1">
                            <tr>
                                <th colspan="2" class="tamidashi">プラン内容</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label class="col-9"><input type="radio" name="radio" id="radio1" value="radio1">なんちゃらプラン3カ月</label>
                                        <label class="col-2 col-form-label text-right">￥000,000</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label class="col-9"><input type="radio" name="radio" id="radio1" value="radio1">なんちゃらプラン3カ月</label>
                                        <label class="col-2 col-form-label text-right">￥000,000</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label class="col-9"><input type="radio" name="radio" id="radio1" value="radio1">なんちゃらプラン3カ月</label>
                                        <label class="col-2 col-form-label text-right">￥000,000</label>
                                    </div>
                                </td>
                            </tr>
                        </table> -->

                        <table class="ta1">
                            <tr>
                                <th colspan="2" class="tamidashi">終活サポート</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label class="col-9"><input type="checkbox" value="">　遺影の作成</label>
                                        <label class="col-2 col-form-label text-right">￥000,000</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label class="col-9"><input type="checkbox" value="">　生前整理お手伝い（買取可能）</label>
                                        <label class="col-2 col-form-label text-right">￥000,000</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label class="col-9"><input type="checkbox" value="">　遺言書作成サポート</label>
                                        <label class="col-2 col-form-label text-right">￥000,000</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label class="col-9"><input type="checkbox" value="">　相続手続き代行</label>
                                        <label class="col-2 col-form-label text-right">￥000,000</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label class="col-9"><input type="checkbox" value="">　終活カウンセラー</label>
                                        <label class="col-2 col-form-label text-right">￥000,000</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label class="col-9"><input type="checkbox" value="">　個人情報整理</label>
                                        <label class="col-2 col-form-label text-right">￥000,000</label>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <!-- <table class="ta1">
                            <tr>
                                <th colspan="2" class="tamidashi">プラン内容</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label class="col-9"><input type="checkbox" value="">　なんちゃらプラン3カ月</label>
                                        <label class="col-2 col-form-label text-right">￥000,000</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label class="col-9"><input type="checkbox" value="">　なんちゃらプラン3カ月</label>
                                        <label class="col-2 col-form-label text-right">￥000,000</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label class="col-9"><input type="checkbox" value="">　なんちゃらプラン3カ月</label>
                                        <label class="col-2 col-form-label text-right">￥000,000</label>
                                    </div>
                                </td>
                            </tr>
                        </table>-->
                        <!--/.row-->
                    </div>
                    <!--/.container-->
                </section>
<!-- 

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">プラン内容</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                
                            <td text-right>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table> -->

            </div>
        </div>
        <!--/.inner-->

        <ul class="row mt-5 passbtn" id="ubutton">
            <li class="col text-center"><a href="./planConfirmation.php">プランを申し込む</a></li>
        </ul>
    </div>
    <!--/.contents-->



    <footer id="footer">
        <?php $_smarty_tpl->_subTemplateRender('file:./../../../html/include/footer.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </footer>
</body>

</html><?php }
}
