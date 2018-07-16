<?php

    // HOME

function homepage_action() {
    global $smarty;

    $live = get_live_home();
    $smarty->assign('live', $live);

    $photos = get_photos_home();
    $smarty->assign('photos', $photos);

    $news = get_news_home();
    $smarty->assign('news', $news);

    $merch = get_merch_home();
    $smarty->assign('merch', $merch);

    $smarty->display('header.tpl');
    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');
}

    // LIVE

function live_action() {
    global $smarty;

    $live = get_live();
    $smarty->assign('live', $live);

    $smarty->display('header.tpl');
    $smarty->display('live.tpl');
    $smarty->display('footer.tpl');
}

    // PHOTOS

function photos_action() {
    global $smarty;

    $photos = get_photos();
    $smarty->assign('photos', $photos);

    $smarty->display('header.tpl');
    $smarty->display('photos.tpl');
    $smarty->display('footer.tpl');
}

    // NEWS

function news_action() {
    global $smarty, $page_number;

    $total_pages = total_pages();
    $smarty->assign('current_page', $page_number);
    $smarty->assign('total_pages', $total_pages);

    $news = get_news();
    $smarty->assign('news', $news);

    $smarty->display('header.tpl');
    $smarty->display('news.tpl');
    $smarty->display('footer.tpl');
}

    // MERCH

function merch_action() {
    global $smarty;

    $merch = get_merch();
    $smarty->assign('merch', $merch);

    $smarty->display('header.tpl');
    $smarty->display('merch.tpl');
    $smarty->display('footer.tpl');
}

    // CONTACT

function contact_action() {
    global $smarty;

    $smarty->display('header.tpl');
    $smarty->display('contact.tpl');
    $smarty->display('footer.tpl');
}

function add_contact_action() {
    add_contact();
}

    // ADMIN

function admin_action() {
    global $smarty;

    $live = admin_live();
    $smarty->assign('live', $live);

    $smarty->display('admin_header.tpl');
    $smarty->display('admin.tpl');
    $smarty->display('admin_footer.tpl');
}

function login_action() {
    login();
}

    // ADMIN HOME

function admin_home_action() {
    global $smarty;

    $smarty->display('admin_header.tpl');
    $smarty->display('admin_home.tpl');
    $smarty->display('admin_footer.tpl');
}


function logout_action() {
    logout();
}

    // ADMIN LIVE

function admin_live_action() {
    global $smarty;



    $smarty->display('admin_header.tpl');
    $smarty->display('admin_live.tpl');
    $smarty->display('admin_footer.tpl');
}

function live_upload_action() {
    upload_live();
}

    // ADMIN PHOTOS

function image_upload_action() {
    upload_image();
}

    // ADMIN NEWS

function news_upload_action() {
    upload_news();
}

    // ADMIN MERCH

function merch_upload_action() {
    upload_merch();
}
    // ADMIN CONTACT



    // PAGE NOT FOUND

function page_not_found_action() {
    global $smarty;

    $smarty->display('notfound.tpl');
}