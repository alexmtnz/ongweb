<?php

define("__HEADER_VIEW__","header");
define("__FOOTER_VIEW__","footer");
define("__CONTENT_VIEW__","template");
define("__SIDEBAR_VIEW__","sidebar");

define("__CSS_PATH__","public/css");
define("__JS_PATH__","public/js");

/**
 * Created by PhpStorm.
 * User: Issam
 * Date: 08/05/2016
 * Time: 16:43
 */

class Front_Controller extends MY_Controller {

    public $left_sidebar;

    public $right_sidebar;

    public function __construct() {


        parent::__construct();


        if (is_null($this->display_header)) {
            $this->display_header = true;
        }

        if (is_null($this->display_footer)) {
            $this->display_footer = true;
        }

        if (is_null($this->header_tpl)) {
            $this->header_tpl = 'header_default.php';
        }

        if (is_null($this->footer_tpl)) {
            $this->footer_tpl = 'footer_default.php';
        }

        if (is_null($this->template)) {
            $this->template = 'content_default.php';
        }

        $this->init_context();
    }


    private function init_context(){

        $this->context =  array(
            'display_header' => $this->display_header,
            'display_footer' => $this->display_footer,
            'display_leftsidebar' =>0,
            'display_rightsidebar' =>0,
            'title'=> toUtf8('Ong propuestas y más'),
            'description' => toUtf8('una descripcion básica'),
            'author' => '@Autores',
            'css' => array(),
            'js' =>array()
        );

        $this->addCSS(array(
            "bootstrap.min.css",
            "bootstrap-theme.min.css"
        ));
        $this->addJS(array(
            "bootstrap.min.js"
        ));
    }

    //Definir contenido
    public function set_template($template,$vars=array()){
        $this->template=$template;
        $this->set_vars($vars);
    }
    //A�adir variables extra (o sobreescribir las ya existentes)
    public function set_vars($vars=array()){
        if($vars)
            $this->context= array_merge($this->context, $vars);
    }

    public function renderView(){

        if($this->left_sidebar!=null){
            $this->context['display_leftsidebar']=1;
        }
        if($this->right_sidebar!=null){
            $this->context['display_rightsidebar']=1;
        }

        if($this->display_header==1)
        $this->load->view(__HEADER_VIEW__.'/'.$this->header_tpl, $this->context);
        $this->left_sidebar==null ?  : $this->load->view(__SIDEBAR_VIEW__.'/'.$this->left_sidebar, $this->context);
        $this->load->view(__CONTENT_VIEW__.'/'.$this->template, $this->context);
        $this->right_sidebar==null ?  : $this->load->view(__SIDEBAR_VIEW__.'/'.$this->right_sidebar, $this->context);
        if($this->display_footer==1)
        $this->load->view(__FOOTER_VIEW__.'/'.$this->footer_tpl, $this->context);
    }

    public function addCSS($cssfiles){

        if(!is_array($cssfiles))
            $cssfiles=array($cssfiles) ;

        foreach($cssfiles as $key => &$cssfile){
            $cssfile =  base_url().__CSS_PATH__.'/'.$cssfile;
        }
        $this->context['css']= array_merge($this->context['css'],$cssfiles);
    }

    public function addJS($jsfiles){
        if(!is_array($jsfiles))
            $jsfiles=array($jsfiles) ;

        foreach($jsfiles as &$jsfile){
            $jsfile = base_url(). __JS_PATH__.'/'.$jsfile;
        }
        $this->context['js']= array_merge($this->context['js'],$jsfiles);
    }
}