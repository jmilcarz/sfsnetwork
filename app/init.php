<?php

// system
$system_name = "sfsnetwork";
$systen_lang = "pl";
$system_host_url = "localhost/sfsnetwork";
$system_Mail_email = "phpstarter@phpstarter.example";
$system_Mail_password = "phpstarter";
$system_Mail_sentFrom = "phpstarter";

// require classes (don't change this)
function __autoload($class_name) {
     require_once './app/classes/' . $class_name . '.php';
}


// functions
$host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if ($host == "" . $system_host_url . "/register.php" || $host == "" . $system_host_url . "/login.php") {
     echo "";
}else {
     auth::isloggedin(); // check if user is loggedin or not
}

// logout
if (isset($_POST['signoutbtn'])) {
     auth::logout();
}

$loggedin = auth::loggedin();
$user = DB::query('SELECT * FROM users WHERE id=:id', [':id'=>$loggedin])[0];
$userid = $user['id'];
$userFullName = $user['firstname'] . " " . $user['lastname'];
