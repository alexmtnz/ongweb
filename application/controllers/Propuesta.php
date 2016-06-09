<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propuesta extends Front_Controller {

    public $id_propuesta=0;

    public function __construct()
    {
        parent::__construct();
    }


    public function index($id_propuesta=1)
    {

        $this->id_propuesta=$id_propuesta;

        $this->set_template("propuesta");
        $this->right_sidebar="sidebarpropuesta";


        $this->load->model("Propuestacampana");
        $this->load->model("Comentario");
        $this->addCSS(array("blog.min.css","components.min.css"));

        $propuesta = $this->Propuestacampana->get($id_propuesta);

       // $comentarios = $this->get_coments();
        $comentarioshmtl = $this->get_comentshtml();

        $query = $this->Comentario->count_coments($id_propuesta);
        $this->set_vars(array(
            "propuesta" => $propuesta,
            "num_coments" => $query->numcoment,
            "comentarios_html" => $comentarioshmtl
        ));

        parent::renderView();

    }

    public function add_coment_parent(){
        $id_parent = $this->input->post('id_parent');
        $id_propuesta =  $this->input->post('id_propuesta');
        $comentario = $this->input->post('message');

        $ok=true;
        $errors ="";


        if(!empty($comentario) and !empty($this->context['user'])){

            $date = new DateTime();
            $this->load->model("Comentario");
            $this->Comentario->comentario = $comentario;
            $this->Comentario->id_parent=$id_parent;
            $this->Comentario->id_propuestacampana=$id_propuesta;
            $this->Comentario->id_user = $this->context['user']->id_user;
            $this->Comentario->date_created  = $date->format("Y-m-d H:m:s");

            if(!$this->Comentario->save()){
                $ok=false;
            }

            }else{

            $ok=false;
            $errors.="comentario vacio";

            }


            die(json_encode(array(
                "response" => $ok,
                "errors" => $errors
            )));
    }




    function get_coments($parent = 0)
    {
        $coments = array();


        if($query)
        foreach($query as $row){
            $coment = array();
            $coment['id'] = $row->id_comentario;
            $coment['comentario'] = $row->comentario;
            $coment['date_created'] = $row->date_created;
            $coment['subcomentarios'] = $this->get_coments($coment['id']);
            $coments[$row->id_comentario] = $coment;
        }

        return $coments;
    }


    public function get_comentshtml($parent = 0,$responseto=""){
            $html="";
        $coments = array();
        $query = $this->Comentario->getAll(
            "INNER JOIN user on comentario.id_user=user.id_user where id_propuestacampana=".$this->id_propuesta." AND id_parent=".$parent,
            "user.nombre as username, user.apellido1 as apellido,comentario.id_comentario");

        if($query)
            foreach($query as $row){
                $html.='<div class="media">';
                    $html.='<div class="media-left">';
                    $html.=' <img src="'.base_url().'public/img/avatar.png" alt="Smiley face" height="42" width="42">';
                    $html.='</div>';
                    $html.='<div class="media-body">';
                if($parent==0){
                    $html.='<h4 class="media-heading"> <a>'.$row->username.'</a> el día <span class="c-date">'.$row->date_created.'</span></h4>';
                }else{
                    $html.='<h4 class="media-heading"> <a>'.$row->username.'</a> en respuesta a '.$responseto.' el día <span class="c-date">'.$row->date_created.'</span></h4>';
                }

                    $html.='<p>'.$row->comentario.'</p>';
                $html.='<button class="butonresponse" id_comentario="'.$row->id_comentario.'" id_parent="'.$row->id_parent.'" id_propuestacampana="'.$row->id_propuestacampana.'" > responder </button> ';
                $html.='<div class="alertacomentario" id="alertacomentario-'.$row->id_comentario.'"> </div>';

                $html.='<div class="media">';
                $responseto=$row->username;
                     $html.= $this->get_comentshtml($row->id_comentario,$responseto);
                    $html.='</div>';
                $html.='</div>';

                $html.='</div>';
            }

        return $html;
    }

}
