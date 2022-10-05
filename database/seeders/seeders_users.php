<?php

require_once '../db.php';

$queries=[
    "INSERT INTO user (is_admin, name, password, organization_id)
    VALUES
    ('1', 'Greg Magnin', '123456', '1') 
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