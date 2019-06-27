<?php

class ConnectDB{
    public static function create($host, $user, $pass, $dbname){
        try
        { 
            if($connect = mysqli_connect($host, $user, $pass, $dbname))
            {
                return $connect;
            } 
            else
            {
                throw new Exception('Unable to connect');
            }
        }
        catch(Exception $e) { print("Exception" . $e->getMessage() . "\n"); die(); }
    }//end create

    public static function close($connection){
        mysqli_close($connection);
    }
    
}
