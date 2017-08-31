<?php
class Dbo {
    private $settings = array();
    private static $_instance = null;
    private function __construct() {
        echo "constructor";
        $this->dbParams = parse_ini_file(ROOT.'/db.ini');
              
        if(false!==(bool)$this->dbParams){
           
            $this->db = mysql_connect(
                        $this->dbParams['host'],
                        $this->dbParams['username'],
                        $this->dbParams['password']);
         
        if (!$this->db){
                
                die('Ошибка соединения с базой данных: ' . mysql_error());
            
            }else{
                mysql_query(
                     "CREATE DATABASE IF NOT EXISTS `".$this->dbParams['dbname']."`");
                mysql_select_db($this->dbParams['dbname'], $this->db);
                return $this->db;
            
               
            }
        }
    }
    
    protected function getDb() {
        
        return $this->db;
    }
    
    
    protected function __clone() {
    // ограничивает клонирование объекта
    }
    static public function getInstance() {
    if(is_null(self::$_instance))
    {
    self::$_instance = new self();
    }
    return self::$_instance;
    }
    public function import() {
    // ...
    }
    public function get() {
    // ...
    }
}