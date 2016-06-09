<?php
/**
 * Created by PhpStorm.
 * User: Issam
 * Date: 27/05/2016
 * Time: 19:40
 */



class HelperForm extends ObjectModel{

    public $fields_form="";

    public function __construct(){
        $this->load->helper('form');
    }


    public function generateForm($attributes){
        $form="";
        //abrimos form
        $form.= form_open($attributes['action'], $attributes);

        $form.='<h3 class="title">'. (isset($attributes['title']) ? $attributes['title'] : '') .'</h3> <p>'. (isset($attributes['title_desc']) ? $attributes['title_desc'] : '') .'</p>';

        foreach($this->fields_form['input'] as &$inputform){
            //change case
            //default class if not set and not empty
            isset($inputform['class'])? (!empty($inputform['class']) ?  : $inputform['class']='form-control' )  : $inputform['class']='form-control'  ;


            $form.='<div class="form-group">';
            $form.='<label>'.$inputform["label"].'  '.(isset($inputform['required']) ? ($inputform['required']==true ?  '<span class="required">*</span>' :   '' )  : ''). '</label>';
            $form.=$this->generate_input_type($inputform);

            $form.='</div>';
        }

        $submit_data=array(
            "type"=>"submit",
            "name"=>"Submit Post!",
            "class"=> "btn btn-default",
            "value"=> "submit"
        );

        $form.= form_submit($submit_data);
        $form.= form_close();


        return $form;
    }

    private function generate_input_type($data){

        unset($data['label'],$data['']);

        $html="";
        switch($data['type']){

            case "text" :
                $html=form_input($data);
                break;
            case "password" :
                $html=form_password($data);
                break;
            case "file" :
                $html=form_upload($data);
                 break;
             case "textarea" :
                $html=form_textarea($data);
                break;
            case "date":
                $html='<input type="date" ';
                foreach($data as $key=> $dat){
                    $html.=" ".$key."='".$dat."' ";
                }
                $html.='>';
                break;

        }

        return $html;
    }


}