<?php
/**
 * Created by PhpStorm.
 * User: Issam
 * Date: 26/05/2016
 * Time: 12:37
 */


class ObjectModel extends  MY_Model{

    public  $class_name;

    public function __construct(){
        $this->class_name=get_class($this);
    }

    /*
      * Return Object by id
      */
    public function get($id=null){
        if($id)
        {
            //build params table object
            $variables_tabla=$this->get_table_vars($this->class_name);;
            // get query object id and limit row
            $query = $this->db->query("SELECT ".$variables_tabla." FROM ".$this->class_name." WHERE id_".$this->class_name."=".$id." LIMIT 1");
            if ($query->num_rows() > 0)
            {
               $result= $query->row();
                foreach($result as $key=> $gett){
                   $this->$key=$gett;
                }
            }
        }

        return $this;
    }

    /*
     * Return all rows on the table
     */
    public function getAll(){
        $variables_tabla=$this->get_table_vars();;

        $query = $this->db->query("SELECT ".$variables_tabla." FROM ".$this->class_name);
        if ($query->num_rows() > 0) {
            return $query->result();
        }else{
            return null;
        }
    }

    /*
     * Guarda O ACTUALIZA (si hay parametro) el objeto en la tabla, devuelve su id si se guarda o 0 si falla, si actualiza devuelve 1 OK
     */
    public function save($id=null){

        $custom_prop = $this->get_properties();
        //quitamos las que estan vacias (da error)
        foreach ($custom_prop as $key => $cus_p) {
            if (empty($custom_prop[$key])) {
                unset($custom_prop[$key]);
            }
        }

        if($id==null) {
            if ($this->db->insert($this->class_name, $custom_prop)) {
                return $this->db->insert_id();
            } else {
                return 0;
            }

        }else{
            $this->db->where('id_'.$this->class_name, $id);
            if($this->db->update($this->class_name, $custom_prop)){
               return 1;
             } else{
                return 0;
            }

        }

    }

    /*
     * @PARAM $class_name, nombre de la clase
     * return valores para la select
     *
     */
    private function get_table_vars(){
        $variables_tabla='';
        $class_vars = $this->get_properties();

        $length_class=sizeof($class_vars);
        $index=0;
        foreach($class_vars as $key => $value){
            $variables_tabla.=$key;
            $length_class==$index+1? $variables_tabla.="" : $variables_tabla.="," ;
            $index++;
        }

        return $variables_tabla;
    }

    private  function get_properties(){
        $r='';
        foreach(get_class_vars(get_called_class()) as $name => $value){
            if(!in_array($name,array_keys(get_class_vars('ObjectModel')))){
                $r[$name]=$this->$name;
            }
        }
        return $r;
    }
}