//--------------------------------
// on click scroll
//--------------------------------

jQuery(function ($) {
  $('a[href^="#"]').click(function () {
    var elmHash = $(this).attr("href");

        // ヘッダーの大きさによって数値を変更
    var pos;
    if ($(window).width() >= 768) {
      pos = $(elmHash).offset().top - 80;
    } else {
      pos = $(elmHash).offset().top - 80;
    }

    // 取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
    $("body,html").animate({ scrollTop: pos }, 700, function () {});

    return false;
  });
});

//--------------------------------
// on link scroll
//--------------------------------

window.addEventListener('load', () => {
    // hashから#を取り除く
    let pageHash = window.location.hash.replace(/#/g, '');
    if (pageHash) {
        let scrollToElement = $('[id="' + pageHash + '"]');
        if (!scrollToElement.length) return;

        // ヘッダーの大きさによって数値を変更
        let pos;
        if ($(window).width() >= 768) {
          pos = scrollToElement.offset().top - 80;
        } else{
          pos = scrollToElement.offset().top - 80;
        }
        $('body,html').animate({scrollTop: pos}, 700, function () {});
    }
})


