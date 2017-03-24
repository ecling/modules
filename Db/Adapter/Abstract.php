<?php
abstract class Db_Abstract{
    protected $_connect = null;
    public function getConnection(){
        $this->_connect();
    }
    
    /**
     * 
     * 
     */
    abstract protected function _connect();
    
    /**
     * 查询SQL抽象类
     *
     */
    abstract protected function query();
    
    /**
     * 查询单条结果抽象类
     * 
     */
    abstract protected function fetch();
    
    /**
     * 查询所有结果抽象类
     * 
     */
     abstract protected function fetchAll();
     
     /**
      * 查询一行抽象类
      * 
      */
     abstract protected function fetchRow();
     
     /**
      * 
      * 
      */
}