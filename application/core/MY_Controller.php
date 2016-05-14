<?php

include("Front_Controller.php");

class MY_Controller extends CI_Controller
{

    public $context=array();

    /** @var array List of CSS files */
    public $css_files = array();

    /** @var array List of JavaScript files */
    public $js_files = array();

    /** @var array List of PHP errors */
    public static $php_errors = array();

    /** @var bool Set to true to display page header */
    public $display_header;

    /** @var string Set to true to display page footer */
    public $display_footer;

    public $header_tpl;

    public $footer_tpl;

    /** @var string Template filename for the page content */
    public $template;


    function __construct()
    {
        parent::__construct();

    }
}
