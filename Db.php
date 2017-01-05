<?php
class Db{
    static $_self = 1;
    protected function __construct(){
        
    }
    public static function getInstance(){
        self::$_self = 10;
    }
    
    public static function getTest(){
        return self::$_self;
    }
}