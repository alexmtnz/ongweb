<?php
/**
 * Created by PhpStorm.
 * User: Issam
 * Date: 26/05/2016
 * Time: 12:21
 */



class User extends ObjectModel{


    public $id_user;
    public $email;
    public $dni;
    public $password;
    public $nombre;
    public $apellido1;
    public $apellido2;



   public function check_user_password($user,$pwd){
       $query = $this->db->query("SELECT id_user,password FROM ".$this->class_name." WHERE email='".$user."' LIMIT 1");
           $result = $query->row();

       if (hash_equals($result->password, crypt($pwd, $result->password))) {
         return $result;
       }else{
           return false;
       }
   }

}

