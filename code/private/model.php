<?php

function make_connection() {
    require '../../../../../../../private/connectie_aurora.php';

    $mysqli = new mysqli(HOST, USER, PASS, DBNAME);

    if ($mysqli->connect_errno) {
        die('Connection error: ' . $mysqli->connect_errno);
    }

    return $mysqli;
}

    // HOME

function get_live_home() {
    $mysqli = make_connection();
    $query = "SELECT `date`, location, city, country, ticket FROM live LIMIT 5";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_result($date, $location, $city, $country, $ticket);
    $stmt->execute() or die('Error executing live');
    $results = array();
    while ($stmt->fetch()) {
        $live = array();
        $live[] = $date;
        $live[] = $location;
        $live[] = $city;
        $live[] = $country;
        $live[] = $ticket;
        $results[] = $live;
    }

    return $results;
}

function get_photos_home() {
    $mysqli = make_connection();
    $query = "SELECT location FROM images ORDER BY imageID DESC LIMIT 6";
    $stmt = $mysqli->prepare($query) or die('Error prepairing query photos');
    $stmt->bind_result($location) or die('Error binding results photos');
    $stmt->execute();

    $results = array();

    while ($stmt->fetch()) {
        $photo = array();
        $photo[] = $location;
        $results[] = $location;
    }

    return $results;
}

function get_news_home() {
    $mysqli = make_connection();
    $query = "SELECT title, `date`, content, imagelink, link FROM news ORDER BY newsID DESC LIMIT 1 ";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_result($title, $date, $content, $imagelink, $link);
    $stmt->execute();

    $results = array();

    while ($stmt->fetch()) {
        $news = array();
        $news[] = $title;
        $news[] = $date;
        $news[] = $content;
        $news[] = $imagelink;
        $news[] = $link;
        $results[] = $news;
    }

    return $results;
}

function get_merch_home() {
    $mysqli = make_connection();

    $query = "SELECT image, product, price, buylink FROM merch ORDER BY merchID DESC LIMIT 2";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_result($image, $product, $price, $buylink) or die('error binding');
    $stmt->execute();

    $results = array();
    while ($stmt->fetch()) {
        $merch = array();
        $merch[] = $image;
        $merch[] = $product;
        $merch[] = $price;
        $merch[] = $buylink;
        $results[] = $merch;
    }

    return $results;
}

    // LIVE

function get_live() {
    $mysqli = make_connection();
    $query = "SELECT `date`, location, city, country, ticket FROM live";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_result($date, $location, $city, $country, $ticket);
    $stmt->execute() or die('Error executing live');

    $results = array();

    while ($stmt->fetch()) {
        $live = array();
        $live[] = $date;
        $live[] = $location;
        $live[] = $city;
        $live[] = $country;
        $live[] = $ticket;
        $results[] = $live;
    }

    return $results;
}

    // PHOTOS

function get_photos() {
    $mysqli = make_connection();
    $query = "SELECT location FROM images ORDER BY imageID DESC";
    $stmt = $mysqli->prepare($query) or die('Error prepairing query photos');
    $stmt->bind_result($location) or die('Error binding results photos');
    $stmt->execute();

    $results = array();

    while ($stmt->fetch()) {
        $photo = array();
        $photo[] = $location;
        $results[] = $location;
    }

    return $results;
}

    // NEWS

function get_news() {
    global $page_number, $search;

    $mysqli = make_connection();
    $firstrow = ($page_number - 1) * ARTICLES_PER_PAGE;
    $per_page = ARTICLES_PER_PAGE;

    $query = "SELECT title, `date`, content, imagelink, link 
              FROM news 
              ORDER BY newsID 
              DESC LIMIT $firstrow, $per_page ";
    $stmt = $mysqli->prepare($query) or die('Error preparing 1.');
    $stmt->bind_result($title, $date, $content, $imagelink, $link);
    $stmt->execute() or die('Error executing 1.');
    $results = array();
    while ($stmt->fetch()) {
        $article = array();
        $article[] = $title;
        $article[] = $date;
        $article[] = $content;
        $article[] = $imagelink;
        $article[] = $link;
        $results[] = $article;
    }

    return $results;
}

function calculate_pages() {
    $mysqli = make_connection();
    $query = "SELECT * FROM news";
    $result = $mysqli->query($query) or die('Error preparing.');
    $rows = $result->num_rows;

    $number_of_pages = ceil($rows / ARTICLES_PER_PAGE);

    return $number_of_pages;

}

function total_pages() {

    $total_pages = calculate_pages();
    return $total_pages;

}

    // MERCH

function get_merch() {
    $mysqli = make_connection();

    $query = "SELECT image, product, price, buylink FROM merch ORDER BY merchID DESC";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_result($image, $product, $price, $buylink) or die('error binding');
    $stmt->execute();

    $results = array();
    while ($stmt->fetch()) {
        $merch = array();
        $merch[] = $image;
        $merch[] = $product;
        $merch[] = $price;
        $merch[] = $buylink;
        $results[] = $merch;
    }

    return $results;
}

    // CONTACT

function add_contact() {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $country = $_POST['country'];

    $mysqli = make_connection();
    $query = "INSERT INTO contact VALUES (0, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query) or die('error query');
    $stmt->bind_param('ssss', $firstname, $lastname, $email, $country);
    $stmt->execute();

    $to = $email;
    $subject = 'Confirmation of newsletter';
    $message = "
                <html>
                <head>
                <title>Confirmation of newsletter</title>
                <style>
                    .line-height {
                    line-height: 0;
                    }
                </style>
                </head>
                <body>
                <p>Thankyou for signing up to the newsletter!</p>
                <p class='line-height'>We received the following information of you:</p>
                <p class='line-height'>First name: $firstname</p>
                <p class='line-height'>Last name: $lastname</p>
                <p class='line-height'>Email: $email</p>
                <p class='line-height'>Country: $country</p>
                <p class='line-height'>If the information is not correct please email us back and we will change it.</p>
                <p>Kind regards,</p>
                <p>AURORA team</p>
                </body>
                </html>
                ";


    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: 25300@ma-web.nl' . "\r\n";

    mail($to,$subject,$message,$headers);

    header('Location: index.php?page=contact');
}

    // ADMIN

function login() {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $mysqli = make_connection();
    $query = "SELECT adminID, hash FROM admin WHERE username = ? AND password = ?";
    $stmt = $mysqli->prepare($query) or die ('Error preparing.');
    $stmt->bind_param('ss', $username, $_POST['password']) or die('Error binding param');
    $stmt->bind_result($adminID, $hash) or die('Error binding result.');
    $_POST['password'] = hash('sha512', $_POST['password']);
    $stmt->execute() or die('Error executing');
    $fetch_succes = $stmt->fetch();

    if (!$fetch_succes) {
        $melding = 'Je gegevens kloppen niet.. Probeer het opnieuw.';
        echo "<script>alert('$melding');</script>";
        echo "<script>window.location.replace('inloggen.php')</script>";
        exit();
    }

    setcookie('adminID', $adminID, time() + (3600 * 24 * 7));
    $_SESSION['adminID'] = $adminID;
    setcookie('hash', $hash, time() + (3600 * 24 * 7));
    $_SESSION['hash'] = $hash;
    header("Location: index.php?page=admin_home");

}


    // ADMIN HOME

function logout() {
    session_start();

    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 3600);
    }

    $_SESSION = array();
    session_destroy();

    if (isset($_COOKIE['adminID'])) {
        setcookie('adminID', '', time() - 3600);
        setcookie('hash', '', time() - 3600);
    }

    header('Location: index.php?page=admin');

}

    // ADMIN LIVE
function admin_live() {
    $mysqli = make_connection();

    $query = "SELECT liveID, `date`, location, city, country, ticket FROM live";
    $stmt = $mysqli->prepare($query) or die('error prepairing');
    $stmt->bind_result($liveID, $date, $location, $city, $country, $ticket);
    $stmt->execute();

    $results = array();
    while ($stmt->fetch()) {
        $live = array();
        $live[] = $liveID;
        $live[] = $date;
        $live[] = $location;
        $live[] = $city;
        $live[] = $country;
        $live[] = $ticket;
        $results[] = $live;
    }

    return $results;
}

function upload_live() {

    $date = $_POST['date'];
    $location = $_POST['location'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $ticket = $_POST['ticket'];

    $mysqli = make_connection();
    $query = "INSERT INTO live VALUES (0, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('sssss', $date, $location, $city, $country, $ticket);
    $stmt->execute();
    $stmt->close();

    header('Location: index.php?page=admin_live');

}

    // ADMIN PHOTOS

function upload_image() {
    $mysqli = make_connection();

    $temp_location = $_FILES['uploaded']['tmp_name'];
    $target_location = 'images/' . time() . $_FILES['uploaded']['name'];

    move_uploaded_file($temp_location, $target_location);

    $query = "INSERT INTO images VALUES (0, ?)";     // ? ? moet er bij
    $stmt = $mysqli->prepare($query) or die ('Error preparing');
    $stmt->bind_param('s', $target_location);     // 'ss' + $title + $beschrijving moet er nog bij
    $stmt->execute() or die ('Error inserting image');
    $stmt->close();

    header('Location: index.php?page=admin');
}

    // ADMIN NEWS

function upload_news() {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $content = $_POST['content'];
    $temp_location = $_FILES['imagelink']['tmp_name'];
    $target_location = 'imagesnews/' . time() . $_FILES['imagelink']['name'];
    $link = $_POST['link'];

    move_uploaded_file($temp_location, $target_location);

    $mysqli = make_connection();
    $query = "INSERT INTO news VALUES (0, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query) or die('Error preparing upload news');
    $stmt->bind_param('sssss', $title, $date, $content, $target_location, $link);
    $stmt->execute() or die('Error executing upload news');
    $stmt->close();

    header('Location: index.php?page=admin');
}

    // ADMIN MERCH

function upload_merch() {
    $mysqli = make_connection();

    $temp_location = $_FILES['image']['tmp_name'];
    $target_location = 'imagesmerch/' . time() . $_FILES['image']['name'];
    $product = $_POST['product'];
    $price = $_POST['price'];
    $buylink = $_POST['buylink'];

    move_uploaded_file($temp_location, $target_location);

    $query = "INSERT INTO merch VALUES (0, ?, ?, ?, ?)";     // ? ? moet er bij
    $stmt = $mysqli->prepare($query) or die ('Error preparing');
    $stmt->bind_param('ssss', $target_location, $product, $price, $buylink);     // 'ss' + $title + $beschrijving moet er nog bij
    $stmt->execute() or die ('Error inserting image');
    $stmt->close();

    header('Location: index.php?page=admin');
}
    // ADMIN CONTACT




