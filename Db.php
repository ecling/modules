<?php
class Db{
    /**
     * ����ʵ��������
     * 
     * @param $adapter ���ݿ�����������
     * 
     */
    public function facty($adapter,$config){
           $className = 'xxxx'.$adapter;
           return $className($config);
    }    
}