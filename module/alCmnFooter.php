<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/module/alCmnFooter.css">

<div class="alCmnFooter">

    <a href="<?php if ($args == 'home') {
                    echo '#mainBody';
                } else {
                    echo home_url('');
                } ?>">
        <p>Web Design Template</p>
        <p><span>&copy;</span>&nbsp;Asante Lab. All Right Reserved</p>
    </a>

</div>