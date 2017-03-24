<?php
class Db{
    /**
     * 数据实例工厂类
     * 
     * @param $adapter 数据库适配器类型
     * 
     */
    public function facty($adapter,$config){
           $className = 'xxxx'.$adapter;
           return $className($config);
    }    
}