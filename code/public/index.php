<?php

require '../private/smarty/Smarty.class.php';
require '../private/model.php';
require '../private/controller.php';

$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

define('ARTICLES_PER_PAGE', 5);

// GET & POST
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$page_number = isset($_GET['pageno']) ? $_GET['pageno'] : '1';

    //CONTACT FORM
if (isset($_POST['submit__contact'])) {
    add_contact_action();
}

    //ADMIN
if (isset($_POST['submit__login'])) {
    login_action();
}

if (isset($_POST['submit__logout'])) {
    logout_action();
}

if (isset($_POST['submit__photos'])) {
    image_upload_action();
}

if (isset($_POST['submit__news'])) {
    news_upload_action();
}

if (isset($_POST['submit__live'])) {
    live_upload_action();
}

if (isset($_POST['submit__merch'])) {
    merch_upload_action();
}


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
    case 'merch':
        merch_action();
        break;
    case 'contact':
        contact_action();
        break;
    case 'admin':
        admin_action();
        break;
    case 'admin_home':
        admin_home_action();
        break;
    case 'admin_live':
        admin_live_action();
        break;
    case 'admin_photos':
        admin_photos_action();
        break;
    case 'admin_news':
        admin_news_action();
        break;
    case 'admin_merch':
        admin_merch_action();
        break;
    case 'admin_contact':
        admin_contact_action();
        break;
    default: page_not_found_action();
    break;

}