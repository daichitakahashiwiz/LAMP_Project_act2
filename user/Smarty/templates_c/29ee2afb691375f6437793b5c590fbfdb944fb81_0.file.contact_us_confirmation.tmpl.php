<?php
/* Smarty version 3.1.33, created on 2019-07-10 14:03:35
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/contact_us_confirmation.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2571a7057de5_00722831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29ee2afb691375f6437793b5c590fbfdb944fb81' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/contact_us_confirmation.tmpl',
      1 => 1562733484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../html/include/header.tmpl' => 1,
    'file:./../../../html/include/footer.tmpl' => 1,
  ),
),false)) {
function content_5d2571a7057de5_00722831 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
>
        $(function () {
            $("#header").load("./html/include/header.html");
            $("#footer").load("./html/include/footer.html");
        });
    <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
<!--
function set_func_form(fn,pm){
	document.form1.target = "_self";
	document.form1.func.value = fn;
	document.form1.param.value = pm;
	document.form1.submit();
}


// -->
<?php echo '</script'; ?>
>

</head>

<body>
 <header id="header">
	<?php $_smarty_tpl->_subTemplateRender('file:./../../../html/include/header.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</header>

    <div class="contents">
        <div class="inner">

            <div class="main">

                <section>
<form name="form1" action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post" >
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
                            <td><strong><?php echo htmlspecialchars($_POST['c_name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
							<input type="hidden" name="c_name" value="<?php echo htmlspecialchars($_POST['c_name'], ENT_QUOTES, 'UTF-8', true);?>
" ></td>
                        </tr>
                        <tr>
                            <th>メールアドレス※</th>
                            <td><strong><?php echo htmlspecialchars($_POST['c_mail'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
							<input type="hidden" name="c_mail" value="<?php echo htmlspecialchars($_POST['c_mail'], ENT_QUOTES, 'UTF-8', true);?>
" ></td>
                        </tr>
                        <tr>
                            <th>メールアドレス(再確認)※</th>
                            <td><strong><?php echo htmlspecialchars($_POST['c_mail_sai'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
							<input type="hidden" name="c_mail_sai" value="<?php echo htmlspecialchars($_POST['c_mail_sai'], ENT_QUOTES, 'UTF-8', true);?>
" ></td>
                        </tr>

                        <tr>
                            <th>お問い合わせ内容※</th>
                             <td><strong><?php echo htmlspecialchars($_POST['c_q'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
							<input type="hidden" name="c_q" value="<?php echo htmlspecialchars($_POST['c_q'], ENT_QUOTES, 'UTF-8', true);?>
" ></td>
                        </tr>
                    </table>
<input type="hidden" name="func" value="" />
<input type="hidden" name="param" value="" />
<input type="hidden" name="member_id" value="<?php echo $_smarty_tpl->tpl_vars['member_id']->value;?>
" />
                    <p class="c">
                     
                           
							<input type="button"  value="戻る" onClick="javascript:set_func_form('edit','')"/>&nbsp;
							<input type="button"  value="送信" onClick="javascript:set_func_form('set','r')"/>
                           
                    </p>            
                        </form>


                </section>

            </div>
            <!--/main-->

        </div>
    </div>
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
