<?php
require "dbcreds.ini";
class Conn{
private static $_instance = null;
private $conn=getInstance();
$conn= connect();
private $creds= array();
$creds= parse_ini_file("dbcreds.ini");
define("HOST",$creds['host']);
define("DBUSER",$creds['dbuser']);
define("DBPWD",$creds['dbpwd']);
define("DBNAME",$creds['dbname']);
 public static getInstance(){
 return self::$_instance;
 }//end static func
 
 private function __construct(){
 if(self::$_instance!=null){
  return self::$instance;
 }else{
  return new Conn();
 }//end if block
 }//end constructor
 
 public function connect(){
 return new mysqli_connect(HOST,DBUSER,DBPWD,DBNAME);
 }//end func

}//end class
?>