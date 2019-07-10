function mouse() {

	/* 詳細ページにいくボタンのマウスオーバー
	—————————————————————————————————— */
    $('.fab').hover(
        function() {
            $(this).addClass("hover");
        },
        function() {
            $(this).removeClass("hover");
		});


	/* パスワード表示・非表示の切り替え
	—————————————————————————————————— */
	$(".toggle-password").click(
		function () {
			// iconの切り替え
			$(this).toggleClass("fa-eye-slash");

			// 入力フォームの取得
			var input = $(this).parent().prev("input");
			// type切替
			if (input.attr("type") == "password") {
				input.attr("type", "text");
			} else {
				input.attr("type", "password");
			}
		});

	
	/* うまくいかなかったとき赤くするやつ
	—————————————————————————————————— */
	$(".passbtn").click(
		function () {
			//赤い文字表示
			$("input.form-control").addClass("is-invalid");
			//目の位置ずらす
			$(".field-icon").css({
				"right": "50px"
			});
		});
}


