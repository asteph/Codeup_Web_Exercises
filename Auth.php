<?php 
require_once 'Log.php';
require_once 'Input.php';
class Auth
{
	//string 'password' hashed
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
	public static function attempt($username, $password)
    {
        //check current post values
    
		$log = new Log('login');
    	if($username == 'guest' && password_verify($password, self::$password)){
    		$_SESSION['loggedIn'] = 'true';
    		$log->info("User {$username} logged in.");
    		header('Location: authorized.php');
    		exit();
    	}else{
    		$message = 'Login Failed';
    		$log->error("User {$username} failed to log in!");
    	}
    
    }
    public static function check()
    {
    	if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 'true') {
    		return true;
    	}else{
    		return false;
    	}
    
    }
    public static function user()
    {
    	return Input::get('username');	
    }
    public static function logout()
    {
    	header('Location: logout.php');
    }
}

?>
