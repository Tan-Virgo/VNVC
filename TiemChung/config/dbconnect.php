<?php
require 'vendor/autoload.php';

function connectNeo4J()
{
  
    $client = Laudis\Neo4j\ClientBuilder::create()
    ->withDriver('default', 'bolt://qltiemchung:18120553@localhost')
    ->build();

    $query = 'MATCH (N) RETURN N';
    $result = $client->run(<<<'CYPHER'
    MERGE (neo4j:Database {name: $dbName}) - [:HasRating] - (rating:Rating {value: 10})
    RETURN neo4j, rating
    CYPHER, ['dbName' => 'neo4j'])->first();

    $neo4j = $result->get('neo4j');
    $rating = $result->get('rating');

    // Outputs "neo4j is 10 out of 10"
    echo $neo4j->getProperty('name').' is '.$rating->getProperty('value') . ' out of 10!';



    // $result_1 = $client->run($query);
    // echo $result_1->get('N');

//===================================================================
//     $driver = $client->getDriver('default');
// // A session manages transactions.
// $session = $driver->createSession();
// // A transaction is the atomic unit of the driver where are the cypher queries are chained.
// $transaction = $session->beginTransaction();
// // A transaction runs the actual queries
// $transaction->run('MATCH (x) RETURN count(x)');


//===============================================================
// $results = $client->run('MATCH (node:Node) RETURN node, node.id AS id');

// // A row is a \Laudis\Neo4j\Types\CypherMap
// foreach ($results as $result) {
//     // Returns a \Laudis\Neo4j\Types\Node
//     $node = $result->get('node');

//     echo $node->getAttribute('id');
//     echo $result->get('id');
// }



// $results = $client->run(<<<'CYPHER'
// MATCH (m:NhomBenh) 
// RETURN m.TenNhomBenh AS title 
// ORDER BY m.TenNhomBenh 
// ASC LIMIT $limit
// CYPHER, ['limit' => 10]);

// foreach ($results as $result) {
//     print '=';
//     echo $result->get('title').PHP_EOL;
// }


}


function connectMongo()
{
    $client = new MongoDB\Client;

    $TiemChungDB = $client->TiemChungDB; 

    return $TiemChungDB;
}
?>