function mouse() {
    // 詳細ページにいくボタンのマウスオーバー
    $('.fab').hover(
        function() {
            $(this).addClass("hover");
        },
        function() {
            $(this).removeClass("hover");
        });
}


// パスワードの表示・非表示切替
$(".toggle-password").click(function() {
    // iconの切り替え
    $(this).toggleClass("fas fa-eye-slash");
    
    // 入力フォームの取得
    var input = $(this).parent().prev("input");
    // type切替
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });