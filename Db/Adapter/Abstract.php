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
     * ��ѯSQL������
     *
     */
    abstract protected function query();
    
    /**
     * ��ѯ�������������
     * 
     */
    abstract protected function fetch();
    
    /**
     * ��ѯ���н��������
     * 
     */
     abstract protected function fetchAll();
     
     /**
      * ��ѯһ�г�����
      * 
      */
     abstract protected function fetchRow();
     
     /**
      * 
      * 
      */
}