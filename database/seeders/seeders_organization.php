<?php

require_once '../db.php';

$queries=[
    "INSERT INTO organization (name)
    VALUES
    ('Web Force 3'),
    ('La meilleure formation'),
    ('W3C')   
    "
];

foreach ($queries as $query) {
    try {
        $statement = $connection->prepare($query);
        $statement->execute();
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() .'<br/>';
    }
}