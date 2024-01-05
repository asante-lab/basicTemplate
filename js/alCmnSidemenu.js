//--------------------------------
// global nav side menu
//--------------------------------

jQuery(function ($) {
  /*
    1. .openbtn : サイドバー開閉
    2. #g-nav a : サイドバーの a リンクの場合、サイドバーを閉じて移行
    3. #g-nav   : サイドバーの a リンク以外の場合、何もしない
    4. その他   : openbtn, g-nav 以外の場合の、サイドバーを閉じる
  */
  $(document).on("click", function (e) {
    if ($(e.target).closest(".openbtn").length) {
      // For Debug : console.log("OPNEBTN");
      if ($(".openbtn").hasClass("active")) {
        $("#g-nav-list").children("ul").css({ display: "none" });
      } else {
        $("#g-nav-list").children("ul").css({ display: "block" });
      }
      $(".openbtn").toggleClass("active");    // ボタン自身に activeクラスを付与し
      $("#g-nav").toggleClass("panelactive"); // ナビゲーションにpanelactiveクラスを付与}
    } else if ($(e.target).closest("#g-nav a").length) {
      // For Debug : console.log("G-NAVI A");
      $("#g-nav-list").children("ul").css({ display: "none" });
      $(".openbtn").removeClass("active");    // ボタンの activeクラスを除去し
      $("#g-nav").removeClass("panelactive"); // ナビゲーションのpanelactiveクラスも除去
    } else if ($(e.target).closest("#g-nav").length) {
      // For Debug : console.log("G-NAVI");
    } else {
      // For Deubg : console.log("OTHER");
      $("#g-nav-list").children("ul").css({ display: "none" });
      $(".openbtn").removeClass("active");    // ボタンの activeクラスを除去し
      $("#g-nav").removeClass("panelactive"); // ナビゲーションのpanelactiveクラスも除去
    }
  });
});
