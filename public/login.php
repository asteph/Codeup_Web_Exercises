<?php
require_once '../Input.php';
require_once '../Auth.php';
require 'functions.php'; 
var_dump($_POST);
$message = null;
// start the session (or resume an existing one)
// this function must be called before trying to set of get any session data!
session_start();

// check to see if user is loggedIn
if (Auth::check()) {
    // redirect
	header('Location: authorized.php');
	exit();
}
//check current post values
if(Input::has('username') && Input::has('password')){
	Auth::attempt(escape(Input::get('username')), escape(Input::get('password')));
}
// store the new value to the session

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <label>username</label>
        <input type="text" name="username"><br>
        <label>password</label>
        <input type="password" name="password"><br>
        <input type="submit">
    </form>
    <?= Auth::$message ?>
</body>
</html>