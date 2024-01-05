<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/module/alCmnSidemenu.css">

<div class="alCmnSidemenu">

  <!-- オープンボタン -->
  <div class="openbtn">
    <span></span>
    <span></span>
  </div>

  <!-- メニュー表示 -->
  <nav id="g-nav">
    <ul>
      <li> <a class="<?php if ($args == 'home') {
                        echo 'alCmnSidemenu_Selected';
                      } else {
                        echo 'alCmnSidemenu_Unselected';
                      } ?>" href="<?php if ($args == 'home') {
                                    echo '#mainBody';
                                  } else {
                                    echo home_url();
                                  } ?>">Home</a>
        <ul>
          <li><a class="<?php if ($args == 'home') {
                          echo 'alCmnSidemenu_Selected';
                        } else {
                          echo 'alCmnSidemenu_Unselected';
                        } ?>" href="<?php if ($args == 'home') {
                                      echo '#alHomeGrid';
                                    } else {
                                      echo home_url('#alHomeGrid');
                                    } ?>">Grid
            </a></li>
          <li><a class="<?php if ($args == 'home') {
                          echo 'alCmnSidemenu_Selected';
                        } else {
                          echo 'alCmnSidemenu_Unselected';
                        } ?>" href="<?php if ($args == 'home') {
                                      echo '#alHomeFlex';
                                    } else {
                                      echo home_url('#alHomeFlex');
                                    } ?>">Flex
            </a></li>
        </ul>
      </li>
      <li> <a class="<?php if ($args == 'sub') {
                        echo 'alCmnSidemenu_Selected';
                      } else {
                        echo 'alCmnSidemenu_Unselected';
                      } ?>" href="<?php if ($args == 'sub') {
                                    echo '#mainBody';
                                  } else {
                                    echo home_url('sub');
                                  } ?>">Sub</a>
        <ul>
          <li><a class="<?php if ($args == 'sub') {
                          echo 'alCmnSidemenu_Selected';
                        } else {
                          echo 'alCmnSidemenu_Unselected';
                        } ?>" href="<?php if ($args == 'sub') {
                                      echo '#alSubFlex';
                                    } else {
                                      echo home_url('sub/#alSubFlex');
                                    } ?>">Flex
            </a></li>
          <li><a class="<?php if ($args == 'sub') {
                          echo 'alCmnSidemenu_Selected';
                        } else {
                          echo 'alCmnSidemenu_Unselected';
                        } ?>" href="<?php if ($args == 'sub') {
                                      echo '#alSubGrid';
                                    } else {
                                      echo home_url('sub/#alSubGrid');
                                    } ?>">Grid
            </a></li>
        </ul>
      </li>
    </ul>
  </nav>

</div>