<?php

include 'header.php';

if ('humorgrafico' == $xoopsConfig['startpage']) {
    $xoopsOption['show_rblock'] = 1;

    require XOOPS_ROOT_PATH . '/header.php';

    make_cblock();
} else {
    $xoopsOption['show_rblock'] = 0;

    require XOOPS_ROOT_PATH . '/header.php';
}

echo '<div align=center>';
echo ' <a href=http://www.humornegro.com/modules/fotodeldia/index.php target=_blank><img src="http://www.humornegro.com/modules/fotodeldia/foto_del_dia.jpg" alt="foto del dia" border="0"></a><br>';
echo '<br>Turbinado pelo: <a href=http://www.humornegro.com/modules/fotodeldia/index.php target=_blank> www.humornegro.com</a>';
echo '</div>';

require XOOPS_ROOT_PATH . '/footer.php';
