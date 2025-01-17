<?php
declare(strict_types=1);

session_start();

require_once 'flight/Flight.php';
// require 'flight/autoload.php';


Flight::route('/', function() {
    Flight::render('page_accueil.php');
});

Flight::start();

?>