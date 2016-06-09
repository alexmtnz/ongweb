<?php
/**
 * Created by PhpStorm.
 * User: Issam
 * Date: 08/06/2016
 * Time: 22:30
 */

class Comentario extends ObjectModel{


    public $comentario;
    public $date_created;
    public $id_parent;
    public $id_propuestacampana;
    public $id_user;


    public function get_child_coment($id_comentario){
        $variables_tabla=$this->get_table_vars();;

        $sql="SELECT ".$variables_tabla." FROM ".$this->class_name." WHERE id_parent=".$id_comentario;
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->result();
        }else{
            return null;
        }
    }

    public function count_coments($id_propuesta){
        $sql="SELECT count(id_comentario) as numcoment FROM ".$this->class_name." WHERE id_propuestacampana=".$id_propuesta;
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->row();
        }else{
            return null;
        }
    }
}