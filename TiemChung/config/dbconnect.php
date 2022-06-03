<?php

// use Laudis\Neo4j\Authentication\Authenticate;
// use Laudis\Neo4j\ClientBuilder;

require 'vendor/autoload.php';


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


    // $client = Laudis\Neo4j\ClientBuilder::create()
    // ->withDriver('default', 'bolt://qltiemchung:18120553@localhost/qltiemchung')
    // ->build();



    // A builder is responsible for configuring the client on a high level.
    $builder = Laudis\Neo4j\ClientBuilder::create()
    ->withDriver('default', 'bolt://qltiemchung:18120553@localhost/qltiemchung')
    ->build();
    // A client manages the drivers as configured by the builder.
    $client = $builder->build();
    // A driver manages connections and sessions.
    $driver = $client->getDriver('default');
    // A session manages transactions.
    $session = $driver->createSession();
    // A transaction is the atomic unit of the driver where are the cypher queries are chained.
    $transaction = $session->beginTransaction();
    // A transaction runs the actual queries
    // $transaction->run('MATCH (x) RETURN count(x)');


    // $client = Laudis\Neo4j\ClientBuilder::create()
    // // ->addHttpConnection('backup', 'http://neo4j:18120553@localhost')
    // ->addBoltConnection('default', 'bolt://qltiemchung:18120553@localhost:7687')
    // ->setDefaultConnection('default')
    // // ->withDriver('default', 'bolt://qltiemchung:18120553@localhost:7687/qltiemchung')
    // ->build();

    
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
    return $transaction;
}


function connectMongo()
{
    $client = new MongoDB\Client;

    $TiemChungDB = $client->TiemChungDB; 

    return $TiemChungDB;
}
?>