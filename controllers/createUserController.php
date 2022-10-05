<?php

require_once '../models/createUserModel.php';

$param_password = "";

if(isset($_POST['name']) && ($_POST['psw']) && $_POST['organisations']) {
    $name = $_POST['name'];
    $password = $_POST['psw'];
    $is_admin = 0;
    $organisations = $_POST['organisations'];
    $param_password = password_hash($password, PASSWORD_DEFAULT);
    createUser($name, $param_password,$is_admin ,$organisations );
}


require_once '../views/registerView.php';
