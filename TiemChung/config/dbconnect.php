<?php
require 'vendor/autoload.php';


function connectMongo()
{
    $client = new MongoDB\Client;

    $TiemChungDB = $client->TiemChungDB; 

    return $TiemChungDB;
}
?>