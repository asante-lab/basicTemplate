// スクロールした際の動きを関数でまとめる
function PageTopAnime() {
  var scroll = $(window).scrollTop();
  if (scroll >= 200) {
    //上から200pxスクロールしたら
    $("#alCmnArrow").removeClass("DownMove"); // #alCmnArrowについているDownMoveというクラス名を除く
    $("#alCmnArrow").addClass("UpMove");      // #alCmnArrowについているUpMoveというクラス名を付与
  } else {
    if ($("#alCmnArrow").hasClass("UpMove")) {
      // すでに#alCmnArrowにUpMoveというクラス名がついていたら
      $("#alCmnArrow").removeClass("UpMove"); // UpMoveというクラス名を除き
      $("#alCmnArrow").addClass("DownMove");  // DownMoveというクラス名を#alCmnArrowに付与
    }
  }
}

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on("load", function () {
  PageTopAnime(); // スクロールした際の動きの関数を呼ぶ
});

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  PageTopAnime(); // スクロールした際の動きの関数を呼ぶ
});

// #alCmnArrow をクリックした際の設定
$("#alCmnArrow a").click(function () {
  $("body,html").animate(
    {
      scrollTop: 0, // ページトップまでスクロール
    },
    500
  ); // ページトップスクロールの速さ。数字が大きいほど遅くなる
  return false; // リンク自体の無効化
});
