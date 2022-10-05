<?php

function createUser (string $name, string $password, int $is_admin, int $organization_id): void {
    require '../database/db.php';
    $sql = "INSERT INTO user (name, password, is_admin, organization_id) VALUES (:name, :password, :is_admin, :organization_id);";
    $query = $connection->prepare($sql);
    $query = $connection->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->bindParam(':is_admin', $is_admin, PDO::PARAM_INT);
    $query->bindParam(':organization_id', $organization_id, PDO::PARAM_INT);
    $query->execute();
  }

  