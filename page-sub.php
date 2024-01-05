<!-- Read HTML Header -->
<?php get_header(); ?>

<body id="mainBody">

    <!-- WordPress向け記述 -->
    <?php wp_body_open(); ?>

    <!-- Splash -->
    <div id="alSplash"></div>

    <?php

    // Common Header
    get_template_part('./module/alCmnHeader', null, 'sub');

    // Sidemenu for Mobile
    get_template_part('./module/alCmnSidemenu', null, 'sub');

    // Eyecatch Picture
    get_template_part('./module/alCmnPic');

    // Component Flexbox
    get_template_part('./module/alSubFlex');

    // Component Grid
    get_template_part('./module/alSubGrid');

    // Common Footer
    get_template_part('./module/alCmnFooter', null, 'sub');

    // Common Upper Arrow
    get_template_part('./module/alCmnArrow');

    ?>

    <!-- ---------------------- 
        JavaScript 
    ------------------------ -->

    <!-- JS/上下スクロール -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/alVerticalScroll.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- JS/Splash処理 -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/alCmnSplash.js"></script>

    <!-- JS/サイドメニュー -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/alCmnSidemenu.js"></script>

    <!-- JS/Arrow 移動処理 -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/alCmnArrow.js"></script>

    <!-- ---------------------- 
        WordPress向け記述 
    ------------------------ -->

    <!-- HTML Footer -->
    <?php wp_footer(); ?>

</body>

</html>