<?php
/**
 * Created by PhpStorm.
 * User: Issam
 * Date: 26/05/2016
 * Time: 12:21
 */



class Propuestacampana extends ObjectModel{


    public $id_propuestacampana;
    public $id_user;
    public $nombre;
    public $descripcion;
    public $creacion;
    public $iscampana;



    public function count_propuestas(){
        $query = $this->db->query("SELECT count(id_propuestacampana) as total_campana FROM ".$this->class_name." WHERE iscampana=0");
        $result = $query->row();

       return $result->total_campana;
    }

    public function count_votos($id_propuesta){
        $query = $this->db->query("SELECT count(id_voto_propuesta) as total_votos FROM voto_propuesta WHERE  id_propuesta=".$id_propuesta);
        $result = $query->row();

        if(!$result)
            return 0;

        return $result->total_votos;
    }

    public function check_user_vote($id_user,$id_propuesta){
        $query = $this->db->query("SELECT id_user  FROM propuestacampana WHERE  id_propuestacampana=".$id_propuesta." LIMIT 1");
        $result_p = $query->row();


        if($result_p->id_user==$id_user){
            return true;
        }else{

        $query = $this->db->query("SELECT id_voto_propuesta  FROM voto_propuesta WHERE  id_propuesta=".$id_propuesta." AND id_user=".$id_user);
        $result = $query->row();

        if(empty($result)){
            return false;
        }else{
            return true;
        }
        }
    }

    public function add_user_vote($id_user,$id_propuesta){
        $date = new DateTime();
        $datefor =$date->format('Y-m-d H:i:s');
        $data = array(
            'id_user' => $id_user ,
            'id_propuesta' => $id_propuesta,
            'date_created' =>$datefor
        );

        $user = $this->context['user'];

        $for=0;
        ($user->karma>=100) ? $for=2 :  $for=1; ;


        for($x=1;$x<=$for;$x++){
            $result = $this->db->insert('voto_propuesta', $data);
        }

        if($result){
                $user->karma=$user->karma+10;
                $user->save($user->id_user);

            return $for;
        }else{
            return 0;
        }

    }

    public function get_all_propuestas($limit_start,$limit){
        $variables_tabla=$this->get_table_vars();;

        $sql="SELECT ".$variables_tabla." FROM ".$this->class_name.' WHERE iscampana=0 LIMIT '.$limit_start.",".$limit;
        $query = $this->db->query($sql);


        if ($query->num_rows() > 0) {
            return $query->result();
        }else{
            return null;
        }
    }

    public function get_propuestas_by_user($id_user){
        $variables_tabla=$this->get_table_vars();;

        $sql="SELECT ".$variables_tabla." FROM ".$this->class_name.' WHERE id_user='.$id_user;
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->result();
        }else{
            return null;
        }

    }
}

