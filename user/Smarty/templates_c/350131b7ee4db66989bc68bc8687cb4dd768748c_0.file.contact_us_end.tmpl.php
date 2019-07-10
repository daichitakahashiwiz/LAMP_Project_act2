<?php
/* Smarty version 3.1.33, created on 2019-07-10 14:03:37
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/contact_us_end.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2571a91c2c47_67896926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '350131b7ee4db66989bc68bc8687cb4dd768748c' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/contact_us_end.tmpl',
      1 => 1562733488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../html/include/header.tmpl' => 1,
    'file:./../../../html/include/footer.tmpl' => 1,
  ),
),false)) {
function content_5d2571a91c2c47_67896926 (Smarty_Internal_Template $_smarty_tpl) {
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

                   
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="list text-center unsubscribedone mx-0 my-0 mt-5">
							<h4>お問い合わせが送信されました！</h4>
							<p>ご入力いただいたメールアドレスにお問い合わせに関する回答を送信させていただきます</p>
                            <p>しばらくお待ちください</p>
						</div>
					</div>

				</div>
				<!--/.row-->

			</div>
			<!--/.container-->
		
                    <input type="hidden" name="func" value="" />
                    <input type="hidden" name="param" value="" />
                    <input type="hidden" name="member_id" value="<?php echo $_smarty_tpl->tpl_vars['member_id']->value;?>
" />
<input type="hidden" name="c_name" value="<?php echo htmlspecialchars($_POST['c_name'], ENT_QUOTES, 'UTF-8', true);?>
" ></td>
<input type="hidden" name="c_mail" value="<?php echo htmlspecialchars($_POST['c_mail'], ENT_QUOTES, 'UTF-8', true);?>
" ></td>
<input type="hidden" name="c_mail_sai" value="<?php echo htmlspecialchars($_POST['c_mail_sai'], ENT_QUOTES, 'UTF-8', true);?>
" ></td>
<input type="hidden" name="c_q" value="<?php echo htmlspecialchars($_POST['c_q'], ENT_QUOTES, 'UTF-8', true);?>
" ></td>


                   <p class="c">
                   <br>
                   <br>
							<input type="button" value="ホームに戻る" class="btn" onClick="javascript:set_func_form('set','h')">
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
