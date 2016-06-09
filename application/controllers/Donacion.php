<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donacion extends Front_Controller {

    public function __construct()
    {
        parent::__construct();
    }


    public function index($page = 1)
    {
        //$this->load->model("Donacion");
        $limit=4;
        //$total_items=$this->Donacion->count_propuestas();
        $limit_start = 0;
        $totalpages = '';

      /*   if($total_items != '' || $total_items != 0)
            $totalpages = ceil($total_items/$limit);

            $limit_start = $limit * ($page - 1);

 */


        $this->right_sidebar="sidebardonacion.php";
        $this->set_template("donacion");

        $this->load->model("donation");

/*         print_r($this->context);
         $this->set_vars(array(
            'limit'=>isset($limit) ? $limit : 0,
            'limit_start'=>isset($limit_start) ? $limit_start : 0 ,
            'page'=>isset($page) ? $page : 1,
            'total'=>$total_items,
            'post_per_page'=>$limit,
            'pagenums' => $totalpages - 1,
            'totalpages' =>$totalpages
        )); */

        parent::renderView();

    }

    public function prueba($data){

        parent::renderView();
    }
}
