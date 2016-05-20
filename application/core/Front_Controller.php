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
            "bootstrap.css",
            "font-awesome.min.css",
            "jslider.css",
            "revslider/settings.css",
            "jquery.fancybox.css",
            "animate.css",
            "video-js.min.css",
            "morris.css",
            "royalslider/royalslider.css",
            "royalslider/skins/minimal-white/rs-minimal-white.css",
            "layerslider/css/layerslider.css",
            "ladda.min.css",
            "datepicker.css",
            "jquery.scrollbar.css",
            "style.css",
            "customizer/pages.css",
            "customizer/home-pages-customizer.css",
        ));

        $this->addJS(array(
            "jquery-2.1.3.min.js",
            "bootstrap.min.js",
            "price-regulator/jshashtable-2.1_src.js",
            "price-regulator/jquery.numberformatter-1.2.3.js",
            "price-regulator/tmpl.js",
            "price-regulator/jquery.dependClass-0.1.js",
            "price-regulator/draggable-0.1.js",
            "price-regulator/jquery.slider.js",
            "jquery.carouFredSel-6.2.1-packed.js",
            "jquery.touchwipe.min.js",
            "jquery.elevateZoom-3.0.8.min.js",
            "jquery.imagesloaded.min.js",
            "jquery.appear.js",
            "jquery.sparkline.min.js",
            "jquery.easypiechart.min.js",
            "jquery.easing.1.3.js",
            "jquery.fancybox.pack.js",
            "isotope.pkgd.min.js",
            "jquery.knob.js",
            "jquery.selectBox.min.js",
            "jquery.royalslider.min.js",
            "jquery.tubular.1.0.js",
            "SmoothScroll.js",
            "country.js",
            "spin.min.js",
            "ladda.min.js",
            "masonry.pkgd.min.js",
            "morris.min.js",
            "raphael.min.js",
            "video.js",
            "pixastic.custom.js",
            "livicons-1.4.min.js",
            "layerslider/greensock.js",
            "layerslider/layerslider.transitions.js",
            "layerslider/layerslider.kreaturamedia.jquery.js",
            "revolution/jquery.themepunch.tools.min.js",
            "revolution/jquery.themepunch.revolution.min.js",
            "bootstrapValidator.min.js",
            "bootstrap-datepicker.js",
            "jplayer/jquery.jplayer.min.js",
            "jplayer/jplayer.playlist.min.js",
            "jquery.scrollbar.min.js",
            "main.js",
        ));
    }

    //Definir contenido
    public function set_template($template,$vars=array()){
        $this->template=$template;
        $this->set_vars($vars);
    }
    //A�adir variables extra (o sobreescribir las ya existentes)
    public function set_vars($vars=array()){
        if($vars){
            if(!is_array($vars))
            $vars = (array) $vars;
            
            $this->context= array_merge($this->context, $vars);
        }

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