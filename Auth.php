<?php 
require_once 'Log.php';
require_once 'Input.php';
class Auth
{
	//static message variable to show if login failed or not
	public static $message;
	//string 'password' hashed
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
	//check the posted username and password to see if they are correct
	public static function attempt($username, $password)
    {
    	//initialize log file to record login attempts for that day 
		$log = new Log('login');
    	if($username == 'guest' && password_verify($password, self::$password)){
    		$_SESSION['loggedIn'] = 'true';
    		$log->info("User {$username} logged in.");
    		header('Location: authorized.php');
    		exit();
    	}else{
    		self::$message = 'Login Failed';
    		$log->error("User {$username} failed to log in!");
    	}
    
    }
    //check to see if the user is already logged in
    public static function check()
    {
    	if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 'true') {
    		return true;
    	}else{
    		return false;
    	}
    
    }
    //get the value of the username
    public static function user()
    {
    	return Input::get('username');	
    }
    //redirect to logout page
    public static function logout()
    {
    	header('Location: logout.php');
    }
}

?>
