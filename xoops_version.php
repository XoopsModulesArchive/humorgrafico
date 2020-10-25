<?php

$modversion['name'] = _MI_HUMORGRAFICO_NAME;
$modversion['version'] = 0.01;
$modversion['description'] = _MI_HUMORGRAFICO_DESC;
$modversion['credits'] = 'humornegro.com';
$modversion['help'] = 'humorgrafico.html';
$modversion['license'] = 'humornegro.com';
$modversion['official'] = 0;
$modversion['image'] = 'images/humorgrafico_slogo.png';
$modversion['dirname'] = 'humorgrafico';

// Menu
$modversion['hasMain'] = 1;
$modversion['hasAdmin'] = 0;

// Blocks
$modversion['blocks'][1]['file'] = 'humorgrafico.php';
$modversion['blocks'][1]['name'] = _MI_HUMORGRAFICO_BNAME1;
$modversion['blocks'][1]['description'] = 'Shows today picture in a block, width=120';
$modversion['blocks'][1]['show_func'] = 'b_humorgrafico_show';
