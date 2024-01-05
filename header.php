<!DOCTYPE html>
<html lang="ja">

<head>

    <!-- meta 情報 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- 検索エンジンお断りの場合はコメントアウトを外す -->
    <!-- <meta name="robots" content="noindex"> -->

    <title><?php bloginfo('name'); ?></title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noticia+Text:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS/JS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- <script src="https://kit.fontawesome.com/xxxxxxxxxx.js" crossorigin="anonymous"></script> -->

    <!-- Home Page Icon (Favicon) -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/alLogo.png">

    <!-- WordPress向け記述 -->
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>

</head>