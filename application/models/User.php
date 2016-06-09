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
    public $karma;
    public $password;
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $fechaNacimiento;
    public $numeroTelefono;


   public function check_user_password($user,$pwd){
       $query = $this->db->query("SELECT id_user,password FROM ".$this->class_name." WHERE email='".$user."' LIMIT 1");
           $result = $query->row();

           // password is correct

        if( md5($pwd) == $result->password) {

         return $result;
       }else{

           return false;
       }
   }

    public function add_karma(){

    }

}

