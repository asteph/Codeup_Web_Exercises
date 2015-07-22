<?php
var_dump($_POST);
$message = null;
if(!empty($_POST)){
	if(strtolower ($_POST['username']) == 'guest' && strtolower ($_POST['password']) == 'password'){
		header('Location: authorized.php');
	}else{
		$message = 'Login Failed';
	}
}

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
    <?= $message ?>
</body>
</html>