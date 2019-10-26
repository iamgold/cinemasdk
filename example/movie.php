<?php

namespace app;

require __DIR__ . '/../vendor/autoload.php';

use Exception;
use iamgold\cinema\MovieClient;
use iamgold\cinema\{Member, Movie};
use iamgold\cinema\Cinema;


$config = require __DIR__ . '/config.php';

Cinema::configure($config);

// $member = new Member;
// $res = $member->memberLogin();

if (!Cinema::isInit())
    throw new \Exception("init false", 500);


$movie = new Movie;
$res = $movie->getMovies();

var_dump($res);




