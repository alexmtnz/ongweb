<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propuestas extends Front_Controller {

    public function __construct()
    {
        parent::__construct();
    }


    public function index($page=1)
    {
        $this->load->model("Propuestacampana");
        $limit=4;
        $total_items=$this->Propuestacampana->count_propuestas();
        $limit_start = 0;
        $totalpages = '';

        if($total_items != '' || $total_items != 0)
            $totalpages = ceil($total_items/$limit);

            $limit_start = $limit * ($page - 1);




        $this->right_sidebar="sidebarpropuestas.php";
        $this->set_template("propuestas");

        $this->load->model("Comentario");
        $all_propuestas= $this->Propuestacampana->get_all_propuestas($limit_start,$limit);


        foreach($all_propuestas as &$propuesta){
            $propuesta->votos =$this->Propuestacampana->count_votos($propuesta->id_propuestacampana);
            $propuesta->comentarios =  $this->Comentario->count_coments($propuesta->id_propuestacampana)->numcoment;
        }
        print_r($this->context);
        $this->set_vars(array(
            "propuestas" => $all_propuestas,
            'limit'=>isset($limit) ? $limit : 0,
            'limit_start'=>isset($limit_start) ? $limit_start : 0 ,
            'page'=>isset($page) ? $page : 1,
            'total'=>$total_items,
            'post_per_page'=>$limit,
            'pagenums' => $totalpages - 1,
            'totalpages' =>$totalpages
        ));

        parent::renderView();

    }

    public function prueba($data){

        parent::renderView();
    }

    public function add_votes(){
        $id_usuario =$this->input->post('id_usuario');
        $id_propuesta= $this->input->post('id_propuesta');
        $result='';
        if($id_usuario<=0){
            $response=2;
        }else{
            $this->load->model("Propuestacampana");
            if(!$this->Propuestacampana->check_user_vote($id_usuario,$id_propuesta)){
             $result=   $this->Propuestacampana->add_user_vote($id_usuario,$id_propuesta);
                if($result>0){
                    $response=1;
                }else{
                    $response=0;
                }

            }else{
                $response=0;
            }
        }

        die(json_encode(array(
            "result"=> $response,
            "number" => $result
        ) ));
    }
}
