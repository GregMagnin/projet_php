<?php

require_once 'config.php';

try {
    $connection = new PDO(
        'mysql:host=' . CONFIG_DB['host'] . ';dbname=' . CONFIG_DB['dbname'] . ';charset=utf8',
        CONFIG_DB['user'],
        CONFIG_DB['password']
    );
} catch(\Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
