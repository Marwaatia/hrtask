<?php
/*
 class created by jonashansen229 in github.
 */
class SingletonDB
{
 
  private $dbConn;
  private static $instance;
  private function __construct()
  {
  }
  private static function getInstance(){
        if (self::$instance == null){
            $className = __CLASS__;
            self::$instance = new $className;
        }

        return self::$instance;
    }
    private static function initConnection(){
        $db = self::getInstance();
        //$connConf = getConfigData();
        $db->dbConn = mysqli_connect('localhost','root','', 'hrdb');
        //$db->dbConn->set_charset('utf8');
        return $db;
    }

 public static function getDbConn() {
         try {
             $db = self::initConnection();
             return $db->dbConn;
         } catch (Exception $ex) {
             echo "I was unable to open a connection to the database. " . $ex->getMessage();
             return null;
         }
       }
       public static function execute($sql)
       {
         $db = SingletonDB::getDbConn();
         if($db)
         {
           $result = mysqli_query($db,$sql);
           
           return $result;
     
         }
         else {
           echo 'not executed';
         }
       }
       
 /*public static function disconnect($db)
  {
    mysqli_close($db);
    //echo 'Connection closed';
  }*/
}

 ?>
