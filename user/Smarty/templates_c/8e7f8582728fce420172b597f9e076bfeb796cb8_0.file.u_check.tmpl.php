<?php
/* Smarty version 3.1.33, created on 2019-07-09 14:37:44
  from '/home/tmD2019/public_html/user/Smarty/templates/admin/u_check.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d242828442fc5_64759059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e7f8582728fce420172b597f9e076bfeb796cb8' => 
    array (
      0 => '/home/tmD2019/public_html/user/Smarty/templates/admin/u_check.tmpl',
      1 => 1562650643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../html/include/header.tmpl' => 1,
    'file:./../../../html/include/usermenubar.tmpl' => 1,
    'file:./../../../html/include/footer.tmpl' => 1,
  ),
),false)) {
function content_5d242828442fc5_64759059 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
		  crossorigin="anonymous">
		<!-- Bootstrap core js -->
		<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		  crossorigin="anonymous"><?php echo '</script'; ?>
>
		<!-- css,jsの呼び出し -->
		<link type="text/css" href="./css/import.css" rel="stylesheet" media="all" />
		<link type="text/css" rel="stylesheet" href="./css/check.css" />
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
				
				});
		<?php echo '</script'; ?>
>
		<style>
				a.user,a.check{
					background: #2b3f7f;
					color: #fff;
				}
		</style>
		<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
> 
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
				$(function(){
				//#newtweetcheckをクリック時に値をクッキーに格納
				$(document).on("click","#newtweetcheck", function(){
				     var cheaked=$("#newtweetcheck").get(0).checked;
				     $.cookie("newtweet", cheaked,{ expires: 730 });
				});
				//ページを読み込んだ時に#newtweetcheckの値を設定
				     var _newtweet=$.cookie("newtweet");
				     if(_newtweet != "false"){
				     $("#newtweetcheck").attr("checked",true);
				     }
				   
				});
				
				
				
				      function alertDebug(arg) {
				         //alert(arg);   // ﾃﾞﾊﾞｯｸﾞ時に有効化すると良い
				      }
				 
				      function save_restore1_checkbox(target_class) {
				         var cbstate;
				 
				         window.addEventListener('load', function () {
				            cbstate = JSON.parse(localStorage['CBState'] || '{}');
				           
				            for (var key in cbstate) { // cbstateはobjectで、このようにforﾙｰﾌﾟすると var key はobjectのｷｰが来るのだ。知らなんだ。
				             
				               var el_lst = document.querySelectorAll('input[data-savekey="' + key + '"].' + target_class);
				               set_checkbox_checked_all(el_lst, true);
				            }
				 
				            var cb = document.getElementsByClassName(target_class);
				          
				            for (var c = 0; c < cb.length; c++) {
				              
				 
				               cb[c].addEventListener('click', function (evt) {
				                  var savekey = this.getAttribute('data-savekey');
				                
				                  if (this.checked) {
				                     cbstate[savekey] = true;
				                  }
				                  else if (cbstate[savekey]) {
				                     delete cbstate[savekey];
				                  }
				                  localStorage['CBState'] = JSON.stringify(cbstate);
				               });
				            }
				         });
				 
				         function set_checkbox_checked_all(el_lst, checked) {
				            for (var c = 0; c < el_lst.length; c++) {
				               var el = el_lst[c];
				             
				               if (el) {
				                	
				                  	el.checked = checked;
				
								   	var cnt0 = $('#tohoku_all input:checkbox:checked').length;
									cnt0 = (Math.floor((cnt0 / 25) * 100));
				        			$('div.tohokuret_all').text(cnt0 + "%");
				       				$('#answer_progress_all').width(cnt0 + "%");
				
									var cnt1 = $('#tohoku_1 input:checkbox:checked').length;
									cnt1 = (Math.floor((cnt1 / 4) * 100));
				        			$('div.tohokuret_1').text(cnt1 + "%");
				       				$('#answer_progress_1').width(cnt1 + "%");   
				
									var cnt2 = $('#tohoku_2 input:checkbox:checked').length;
									cnt2 = (Math.floor((cnt2 / 4) * 100));
				        			$('div.tohokuret_2').text(cnt2 + "%");
				       				$('#answer_progress_2').width(cnt2 + "%");   
				
									var cnt3 = $('#tohoku_3 input:checkbox:checked').length;
									cnt3 = (Math.floor((cnt3 / 6) * 100));
				        			$('div.tohokuret_3').text(cnt3 + "%");
				       				$('#answer_progress_3').width(cnt3 + "%");   
				
									var cnt4 = $('#tohoku_4 input:checkbox:checked').length;
									cnt4 = (Math.floor((cnt4 / 4) * 100));
				        			$('div.tohokuret_4').text(cnt4 + "%");
				       				$('#answer_progress_4').width(cnt4 + "%");   
				
									var cnt5 = $('#tohoku_5 input:checkbox:checked').length;
									cnt5 = (Math.floor((cnt5 / 3) * 100));
				        			$('div.tohokuret_5').text(cnt5 + "%");
				       				$('#answer_progress_5').width(cnt5 + "%");   
				
									var cnt6 = $('#tohoku_6 input:checkbox:checked').length;
									cnt6 = (Math.floor((cnt6 / 3) * 100));
				        			$('div.tohokuret_6').text(cnt6 + "%");
				       				$('#answer_progress_6').width(cnt6 + "%");   
				               }
				            }
				         }
				      }
				      save_restore1_checkbox('save-state1');
				
				$(function() {
				    $('input:checkbox').change(function() {
				        	var cnt0 = $('#tohoku_all input:checkbox:checked').length;
									cnt0 = (Math.floor((cnt0 / 25) * 100));
				        			$('div.tohokuret_all').text(cnt0 + "%");
				       				$('#answer_progress_all').width(cnt0 + "%");
				
									var cnt1 = $('#tohoku_1 input:checkbox:checked').length;
									cnt1 = (Math.floor((cnt1 / 4) * 100));
				        			$('div.tohokuret_1').text(cnt1 + "%");
				       				$('#answer_progress_1').width(cnt1 + "%");   
				
									var cnt2 = $('#tohoku_2 input:checkbox:checked').length;
									cnt2 = (Math.floor((cnt2 / 4) * 100));
				        			$('div.tohokuret_2').text(cnt2 + "%");
				       				$('#answer_progress_2').width(cnt2 + "%");   
				
									var cnt3 = $('#tohoku_3 input:checkbox:checked').length;
									cnt3 = (Math.floor((cnt3 / 6) * 100));
				        			$('div.tohokuret_3').text(cnt3 + "%");
				       				$('#answer_progress_3').width(cnt3 + "%");   
				
									var cnt4 = $('#tohoku_4 input:checkbox:checked').length;
									cnt4 = (Math.floor((cnt4 / 4) * 100));
				        			$('div.tohokuret_4').text(cnt4 + "%");
				       				$('#answer_progress_4').width(cnt4 + "%");   
				
									var cnt5 = $('#tohoku_5 input:checkbox:checked').length;
									cnt5 = (Math.floor((cnt5 / 3) * 100));
				        			$('div.tohokuret_5').text(cnt5 + "%");
				       				$('#answer_progress_5').width(cnt5 + "%");   
				
									var cnt6 = $('#tohoku_6 input:checkbox:checked').length;
									cnt6 = (Math.floor((cnt6 / 3) * 100));
				        			$('div.tohokuret_6').text(cnt6 + "%");
				       				$('#answer_progress_6').width(cnt6 + "%");   
				    }).trigger('change');
				});
		<?php echo '</script'; ?>
>
</head>
<body>
		<header id="header"> <?php $_smarty_tpl->_subTemplateRender('file:./../../../html/include/header.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> </header>
		<div class="user container-fluid">
				<div class="row usermenubar">
						<div class="col-2 usermenubar sub p-0">
								<div id="usermenubar"> <?php $_smarty_tpl->_subTemplateRender('file:./../../../html/include/usermenubar.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> </div>
						</div>
						<div class="col-10 main-content contents" id="tohoku_all">
								<div class="inner">
										<section class="c3">
												<div class="container">
														<div class="row">
																<div class="col-sm-12 col-4"> 全体進捗率
																		<div class="progress" style="height: 30px;">
																				<div id="answer_progress_all" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow=@aria_valuenow
																				  aria-valuemin="0" aria-valuemax="100">
																						<div class="tohokuret_all"></div>
																				</div>
																		</div>
																</div>
														</div>
												</div>
												<div class="container">
														<div class="row">
																<div class="col-sm-12 col-4"> 遺品の整理（４項目）
																		<div class="progress" style="height: 30px;">
																				<div id="answer_progress_1" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow=@aria_valuenow
																				  aria-valuemin="0" aria-valuemax="100">
																						<div class="tohokuret_1"></div>
																				</div>
																		</div>
																</div>
														</div>
														<!--/.row-->
												</div>
												<!--/.container-->
												<form name="form1" action="">
														<div id="tohoku_1">
																<div class="container">
																		<div class="row">
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="1" data-savekey="1" class="save-state1">不用品等の片づけ</p>　 </div>
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="2" data-savekey="2" class="save-state1">遺品の譲渡先の決定</p>
																						</div>
																		</div>
																		<!--/.row-->
																		<div class="row">
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="3" data-savekey="3" class="save-state1">ペットの譲渡先の決定</p>
																						</div>
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="4" data-savekey="4" class="save-state1">デジタルデータの整理</p>
																						</div>
																		</div>
																		<!--/.row-->
																</div>
														</div>
														<div class="container">
																<div class="row">
																		<div class="col-sm-12 col-4"> 介護・医療（４項目）
																				<div class="progress" style="height: 30px;">
																						<div id="answer_progress_2" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow=@aria_valuenow
																						  aria-valuemin="0" aria-valuemax="100">
																								<div class="tohokuret_2"></div>
																						</div>
																				</div>
																		</div>
																</div>
																<!--/.row-->
														</div>
														<!--/.container-->
														<div id="tohoku_2">
																<div class="container">
																		<div class="row">
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="5" data-savekey="5" class="save-state1">介護人の決定</p>　 </div>
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="6" data-savekey="6" class="save-state1">かかりつけの病院の決定</p>
																						</div>
																		</div>
																		<!--/.row-->
																		<div class="row">
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="7" data-savekey="7" class="save-state1">保険の加入</p>　 </div>
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="8" data-savekey="8" class="save-state1">自分が望む終末医療の決定</p>
																						</div>
																		</div>
																		<!--/.row-->
																</div>
																<!--/.container-->
														</div>
														<div class="container">
																<div class="row">
																		<div class="col-sm-12 col-4"> 葬儀（６項目）
																				<div class="progress" style="height: 30px;">
																						<div id="answer_progress_3" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow=@aria_valuenow
																						  aria-valuemin="0" aria-valuemax="100">
																								<div class="tohokuret_3"></div>
																						</div>
																				</div>
																		</div>
																</div>
																<!--/.row-->
														</div>
														<!--/.container-->
														<div id="tohoku_3">
																<div class="container">
																		<div class="row">
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="9" data-savekey="9" class="save-state1">葬儀の方法の決定</p>　 </div>
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="10" data-savekey="10" class="save-state1">葬儀に呼ぶ人の決定</p>
																						</div>
																		</div>
																		<!--/.row-->
																		<div class="row">
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="11" data-savekey="11" class="save-state1">葬儀の予算の用意</p>
																						</div>
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="12" data-savekey="12" class="save-state1">宗派やお寺等の希望を伝えたか</p>
																						</div>
																		</div>
																		<!--/.row-->
																		<div class="row">
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="13" data-savekey="13" class="save-state1">喪主の決定</p>　 </div>
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="14" data-savekey="14" class="save-state1">遺影の用意</p>　 </div>
																		</div>
																		<!--/.row-->
																</div>
																<!--/.container-->
														</div>
														<div class="container">
																<div class="row">
																		<div class="col-sm-12 col-4"> お墓（４項目）
																				<div class="progress" style="height: 30px;">
																						<div id="answer_progress_4" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow=@aria_valuenow
																						  aria-valuemin="0" aria-valuemax="100">
																								<div class="tohokuret_4"></div>
																						</div>
																				</div>
																		</div>
																</div>
																<!--/.row-->
														</div>
														<!--/.container-->
														<div id="tohoku_4">
																<div class="container">
																		<div class="row">
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="15" data-savekey="15" class="save-state1">供養の方法の決定</p>
																						</div>
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="16" data-savekey="16" class="save-state1">お墓の管理人の決定</p>
																						</div>
																		</div>
																		<!--/.row-->
																		<div class="row">
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="17" data-savekey="17" class="save-state1">維持費や購入費の用意</p>
																						</div>
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="18" data-savekey="18" class="save-state1">お墓の購入先の決定</p>
																						</div>
																		</div>
																		<!--/.row-->
																</div>
																<!--/.container-->
														</div>
														<div class="container">
																<div class="row">
																		<div class="col-sm-12 col-4"> お金と住まい（３項目）
																				<div class="progress" style="height: 30px;">
																						<div id="answer_progress_5" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow=@aria_valuenow
																						  aria-valuemin="0" aria-valuemax="100">
																								<div class="tohokuret_5"></div>
																						</div>
																				</div>
																		</div>
																</div>
																<!--/.row-->
														</div>
														<!--/.container-->
														<div id="tohoku_5">
																<div class="container">
																		<div class="row">
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="19" data-savekey="19" class="save-state1">老後の資金の用意</p>
																						</div>
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="20" data-savekey="20" class="save-state1">「終のすみか」の決定</p>
																						</div>
																		</div>
																		<!--/.row-->
																		<div class="row">
																				<div class="col-sm-1 col-0"> </div>
																				<div class="box2 col-sm-4 col-4">
																						<p><input type="checkbox" name="item[]" value="21" data-savekey="21" class="save-state1">不動産の譲渡先の決定</p>
																						</div>
																				<div class="col-sm-1 col-0"> </div>
																				<!--/.row-->
																		</div>
																		<!--/.container-->
																</div>
										</section>
										<section class="c3">
												<div class="container">
														<div class="row">
																<div class="col-sm-12 col-4"> 財産・遺産（３項目）
																		<div class="progress" style="height: 30px;">
																				<div id="answer_progress_6" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow=@aria_valuenow
																				  aria-valuemin="0" aria-valuemax="100">
																						<div class="tohokuret_6"></div>
																				</div>
																		</div>
																</div>
														</div>
														<!--/.row-->
												</div>
												<!--/.container-->
												<div id="tohoku_6">
														<div class="container">
																<div class="row">
																		<div class="col-sm-1 col-0"> </div>
																		<div class="box2 col-sm-4 col-4">
																				<p><input type="checkbox" name="item[]" value="22" data-savekey="22" class="save-state1">誰にいくら残すのかを決定</p>
																				</div>
																		<div class="col-sm-1 col-0"> </div>
																		<div class="box2 col-sm-4 col-4">
																				<p><input type="checkbox" name="item[]" value="23" data-savekey="23" class="save-state1">遺言書の作成</p>　 </div>
																</div>
																<!--/.row-->
																<div class="row">
																		<div class="col-sm-1 col-0"> </div>
																		<div class="box2 col-sm-4 col-4">
																				<p><input type="checkbox" name="item[]" value="24" data-savekey="24" class="save-state1">エンディングノートの作成</p>
																				</div>
																		<div class="col-sm-1 col-0"> </div>
																		<!--/.row-->
																</div>
																<!--/.container-->
														</div>
										</section>
										</div>
										<!--/.inner-->
										</div>
										<!--/.contents-->
								</div>
								<!--/.row.usermenubar-->
						</div>
						<!--/.user.container-fluid-->
						<footer id="footer"> <?php $_smarty_tpl->_subTemplateRender('file:./../../../html/include/footer.tmpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> </footer>
</body>
</html>
<?php }
}
