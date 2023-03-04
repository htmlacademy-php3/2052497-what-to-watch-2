<?php
require_once 'vendor/autoload.php';

use Emv\OmdbHttpClient;
use Emv\OmdbMovie;


$id = 'tt0944947';
$client = new OmdbHttpClient();
$service = new OmdbMovie($client);
$movie = $service->getInfo($id);
var_dump($movie);



