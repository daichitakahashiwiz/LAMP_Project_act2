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