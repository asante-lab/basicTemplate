//------------------------------------
// Splash, Simple Loading Animation 
//------------------------------------

// べージ全体が読み込まれた時に処理開始
$(window).on('load', function () {
    $("#alSplash").delay(100).fadeOut('slow');
});