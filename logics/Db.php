<?php
/*
 * Db class
 *
*/
require("propertice.php");


class Db {

    public static $connect =null;
    public static $selectdb = null;

    public static function Connect() {

        if(self::$connect == null) {
            self::$connect = mysql_connect(HOST, USER_NAME, PASSWORD);
        }
        if(!self::$connect) {
            die("Connection with mysql is faild<br/>".mysql_error());
        }
        if(self::$selectdb == null) {
            self::$selectdb = mysql_select_db(DBASE, self::$connect);
        }
        if(!self::$selectdb) {
           die("Db Selection faild <br/>".mysql_error());
        }
        return self::$connect;
    }

    public static function SqlQuery($quary){

        $result = mysql_query($quary, self::Connect());
        if(!$result){

            die("query failed".mysql_error());
        }
        return $result;
    }

    public static function close(){

        mysql_close(self::Connect());
    }

}


?>
