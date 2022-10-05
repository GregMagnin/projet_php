<?php

require_once 'db.php';

$queries = [
    "CREATE TABLE user (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    is_admin TINYINT(1) NOT NULL,
    name VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(35) NOT NULL,
    organization_id INT NOT NULL
    )"
];

$queries[1] =
    "CREATE TABLE organization (
       id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
       name VARCHAR(60) NOT NULL
       )"
;        

$queries[2] = 
"CREATE TABLE course_organization (
    course_id INT NOT NULL,
    organization_id INT NOT NULL,
    PRIMARY KEY (course_id, organization_id)
    )"
;

$queries[3] = 
"CREATE TABLE courses (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    category VARCHAR(70) NOT NULL
    )"
 ;
 
 $queries[4] = 
 "CREATE TABLE course_user (
    course_id INT NOT NULL,
    user_id INT NOT NULL,
    PRIMARY KEY (course_id, user_id)
    )"
;

$queries[5] = 
"ALTER TABLE course_user ADD CONSTRAINT FK_course_user_course_id FOREIGN KEY (course_id) REFERENCES courses (id) ON DELETE CASCADE";

$queries[6] = 
"ALTER TABLE course_user ADD CONSTRAINT FK_course_user_user_id FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE";

$queries[7] = 
"ALTER TABLE course_organization ADD CONSTRAINT FK_course_organization_course_id FOREIGN KEY (course_id) REFERENCES courses (id) ON DELETE CASCADE";

$queries[8] =
"ALTER TABLE course_organization ADD CONSTRAINT FK_course_organization_organization_id FOREIGN KEY (organization_id) REFERENCES organization (id) ON DELETE CASCADE";

foreach ($queries as $query) {
    try {
        $statement = $connection->prepare($query);
        $statement->execute();
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() . '<br/>';
    }
}