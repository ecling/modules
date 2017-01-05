<?php
/**
 * Mysql数据库select语言组装
 * 
 * @author ling
 * @category db
 * 
 */
class Select{
    protected $_array = array(
        'distinct' => false,
        'columns' => array(),
        'from'=>array(),
        'where' => array(),
        'join' => array(),
        'order' => array(),
        'group' => array(),
        'having' => array(),
        'limit' => array(),
    );
    
    /**
     * SQL from
     * 
     */
    public function from(){
        
    }
    
    /**
     * SQL where 语句
     *
     */
    public function where(){
        
    }
    
    /**
     * SQL 增加查询字段
     * 
     */
    public function columns(){
        
    }
    
    /**
     * SQL order 排序
     * 
     */
    public function order(){
        
    }
    
    /**
     * SQL group 分组
     * 
     */
    public function group(){
        
    }
    
    /**
     * 
     * 
     */
     public function having(){
        
     }
    
    /**
     * SQL limit 翻页
     *
     */
    public function limit(){
        
    }
    
    /**
     * 
     * 
     */
    public function joinLeft(){
        
    }
    
    /**
     * 
     * 
     */
    public function joinRight(){
        
    }
    
    /**
     * 
     * 
     */
    public function joinFull(){
        
    }
    
    /**
     * 
     * 
     */
    public function join(){
        
    }
    
    public function Build(){
        
    }
    
    public function __toString(){
        
    }
}