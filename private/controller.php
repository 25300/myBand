<?php

function homepage_action() {
    global $smarty;

    $live = get_live_home();
    $smarty->assign('live', $live);

    $smarty->display('header.tpl');
    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');
}

function live_action() {
    global $smarty;

    $live = get_live();
    $smarty->assign('live', $live);

    $smarty->display('header.tpl');
    $smarty->display('live.tpl');
    $smarty->display('footer.tpl');
}

function photos_action() {
    global $smarty;

    $photos = get_photos();
    $smarty->assign('photos', $photos);

    $smarty->display('header.tpl');
    $smarty->display('photos.tpl');
    $smarty->display('footer.tpl');
}
function news_action() {
    global $smarty;

    $smarty->display('header.tpl');
    $smarty->display('news.tpl');
    $smarty->display('footer.tpl');
}

function store_action() {
    global $smarty;

    $smarty->display('header.tpl');
    $smarty->display('store-header.tpl');
    $smarty->display('store.tpl');
    $smarty->display('store-footer.tpl');
}

function contact_action() {
    global $smarty;

    $smarty->display('header.tpl');
    $smarty->display('contact.tpl');
    $smarty->display('footer.tpl');
}

function admin_action() {
    global $smarty;

    $smarty->display('admin_header.tpl');
    $smarty->display('admin.tpl');
    $smarty->display('admin_footer.tpl');

}

function page_not_found_action() {
    global $smarty;

    $smarty->display('notfound.tpl');
}