<?php

class Input
{
    public static function getString($key)
    {
        $string = Input::get($key);
        if(!is_numeric($string)){
            return $string;
        }else{
            throw new Exception($string . ' needs to be a string.');
        }
        
    }
    public static function getDate($key)
    {
        $date = Input::get($key);
        $dateArray = explode("-", $date);

        //(checkdate($d,$m,$y));
        if(checkdate((int)$dateArray[1], (int)$dateArray[2], (int)$dateArray[0])) {
            return $date;
        }
        else {
            throw new Exception($date . ' is not a valid date.');
        }
        
    }
    // GOT AN ERROR FOR $dateObject->date
    // public static function getDate($key)
    // {
    //     $value = Input::get($key);
    //     $format = 'Y-m-d';

    //     $dateObject = DateTime::createFromFormat($format, $value);
        

    //     if($dateObject) {
    //         return $dateObject->date;
    //     } else {
    //         throw new Exception($date . ' :this must be a valid date');
    //     }

    // }
    public static function getNumber($key)
    {
        $number = Input::get($key);
        if(is_numeric($number)){
            return $number;
        }else{
            throw new Exception($number . ' needs to be a number.');
        }

    }
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
       if (isset($_REQUEST[$key])){
        return true;
       }else{
        return false;
       }
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key)
    {
        if (isset($_REQUEST[$key])){
            return trim($_REQUEST[$key]);
        }
        else{
            throw new Exception('The value you are requesting does not exist.');
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
