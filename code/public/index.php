<?php

require '../private/smarty/Smarty.class.php';
require '../private/model.php';
require '../private/controller.php';

$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        homepage_action();
        break;
    case 'live':
        live_action();
        break;
    case 'photos';
        photos_action();
        break;
    case 'news':
        news_action();
        break;
    case 'store':
        store_action();
        break;
    case 'contact':
        contact_action();
        break;
    case 'admin':
        admin_action();
        break;
    default: page_not_found_action();
    break;

}