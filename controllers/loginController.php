<?php 

require_once '../models/loginModel.php';

if (isset($_POST['name']) && isset($_POST['psw']) {
   $name = $_POST['name'];
   $password = $_POST['psw'];
    
}


require_once '../views/loginView.php';