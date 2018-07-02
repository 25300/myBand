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
    $query = "SELECT date, location, city, country, ticket FROM live LIMIT 5";
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

    // LIVE

function get_live() {
    $mysqli = make_connection();
    $query = "SELECT date, location, city, country, ticket FROM live";
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
        $results = $location;
    }

    return $results;
}