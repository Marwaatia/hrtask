<?php

include_once '../controllers/singletonDB.php' ;

 class User{
    public $id;
    public $name;
    public $password;
    public $email;
    //public $tname = "user";

    public function login($username,$password)
    {
        $r = self::search($username);
        return $r;
    }
    public function search ($key)
    {
        $sql = "select * from `user` where `name` = '$key'";
        $result = SingletonDB::execute($sql);
        return $result;
    }
}

?>