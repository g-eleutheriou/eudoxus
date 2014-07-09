<?php

class Connector
{

    //variable to hold db connection
    private $db;
    private $pdo = null;
    //note we used static variable,beacuse an instance cannot be used to refer this
    public static $instance;

    //note constructor is private so that class cannot be instantiated
    private function __construct()
    {
        try
        {
            $dsn = "mysql:host=localhost;dbname=wsms;charset=UTF8";
            $username = "wsms";
            $password = "mia_oraia_petalouda";
        
            $this->pdo = new PDO($dsn, $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } 
        catch(PDOException $e) 
        {
	       echo $e->getMessage();
        }
    }     

     //to prevent loop hole in PHP so that the class cannot be cloned
    private function __clone() 
    {

    }

    //used static function so that, this can be called from other classes
    public static function getInstance()
    {

    }

    public static function getPDO()
    {
        if( !(self::$instance instanceof self) )
        {
            self::$instance = new self();           
        }
        return self::$instance->pdo;
    }

}