<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/module/alCmnHeader.css">

<div class="alCmnHeader">

    <div class="alCmnInbox">

        <!-- 左側、あさんてロゴ -->
        <div>
            <h1>
                <a href="<?php if ($args == 'home') {
                                echo '#mainBody';
                            } else {
                                echo home_url('');
                            } ?>">
                    <img alt="Asante Lab." src="<?php echo get_template_directory_uri(); ?>/img/alTemplateLogo.svg">
                </a>
            </h1>
        </div>

        <!-- 右側、メニュー -->
        <div>
            <ul>
                <li class="<?php if ($args == 'home') {
                                echo 'alCmnHeader_Selected';
                            } else {
                                echo 'alCmnHeader_Focused';
                            } ?>"><a href="<?php if ($args == 'home') {
                                                echo '#mainBody';
                                            } else {
                                                echo home_url();
                                            } ?>">Home</a>
                    <ul>
                        <li><a href="<?php if ($args == 'home') {
                                            echo '#alHomeGrid';
                                        } else {
                                            echo home_url('#alHomeGrid');
                                        } ?>">Grid
                            </a></li>
                        <li><a href="<?php if ($args == 'home') {
                                            echo '#alHomeFlex';
                                        } else {
                                            echo home_url('#alHomeFlex');
                                        } ?>">Flex
                            </a></li>
                    </ul>
                </li>
                <li class="<?php if ($args == 'sub') {
                                echo 'alCmnHeader_Selected';
                            } else {
                                echo 'alCmnHeader_Focused';
                            } ?>"><a href="<?php if ($args == 'sub') {
                                                echo '#mainBody';
                                            } else {
                                                echo home_url('sub');
                                            } ?>">Sub</a>
                    <ul>
                        <li><a href="<?php if ($args == 'sub') {
                                            echo '#alSubFlex';
                                        } else {
                                            echo home_url('sub/#alSubFlex');
                                        } ?>">Flex
                            </a></li>
                        <li><a href="<?php if ($args == 'sub') {
                                            echo '#alSubGrid';
                                        } else {
                                            echo home_url('sub/#alSubGrid');
                                        } ?>">Grid
                            </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>