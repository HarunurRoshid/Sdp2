<?php


namespace Apps\classes;


class Database
{
    public function dbConnection(){
       $hostname='localhost';
       $username='root';
       $password='';
       $db='shopping';
       $link=mysqli_connect($hostname,$username,$password,$db);
       return $link;

    }


}