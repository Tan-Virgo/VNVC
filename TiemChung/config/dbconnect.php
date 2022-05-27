<?php

use Laudis\Neo4j\Authentication\Authenticate;
use Laudis\Neo4j\ClientBuilder;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . '\vendor\autoload.php';

function connectNEO4J()
{
    // $neo4jVersion = getenv('NEO4J_VERSION');
    // $neo4jVersion = $neo4jVersion === false ? '' : $neo4jVersion;

    // $database = getenv('NEO4J_DATABASE');
    // $database = $database === false ? 'movies' : $database;

    // $uri = getenv('NEO4J_URI');
    // $uri = $uri === false ? 'neo4j+s://demo.neo4jlabs.com' : $uri;
    // if (!str_starts_with($neo4jVersion, '3')) {
    //     $uri = sprintf("%s?database=%s", $uri, $database);
    // }

    // $user = getenv('NEO4J_USER');
    // $user = $user === false ? 'movies' : $user;

    // $password = getenv('NEO4J_PASSWORD');
    // $password = $password === false ? 'movies' : $password;

    // $auth = Authenticate::basic($user, $password);
    // $client = ClientBuilder::create()
    //     ->withDriver('default', $uri, $auth)
    //     ->build();

    $client = Laudis\Neo4j\ClientBuilder::create()
    // ->addHttpConnection('backup', 'http://neo4j:18120553@localhost')
    // ->addBoltConnection('default', 'bolt://neo4j:18120553@localhost')
    // ->setDefaultConnection('default')
    ->withDriver('default', 'bolt://neo4j:18120553@localhost:7687')
    ->build();
    
    
    // try 
    // {
    //     $result = $client->run('RETURN 1 AS x');
    //     if (1 === $result->firstRecord()->get('x')) 
    //     {  

    //     }
    // } 
    // catch(Exception $e) 
    // {
    //     die( "Couldn't connect to Neo4J" );
    // }
    return $client;
}

function connectMongo()
{
    // $m = new MongoDB\Driver\Manager('mongodb+srv://admin:admin@tiemchungdb.4c4y5.mongodb.net/test');
    // $connection = new MongoClient();
    // $db = $connection->TiemChungDB;

    // $db = new Mongo('mongodb+srv://admin:admin@tiemchungdb.4c4y5.mongodb.net/test');

    $m = new MongoDB\Driver\Manager('mongodb+srv://admin:admin@tiemchungdb.4c4y5.mongodb.net/test');

    $db = $m->TiemChungDB;

    return $db;
}
?>