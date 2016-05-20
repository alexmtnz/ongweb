<?php
/**
 * Created by PhpStorm.
 * User: Issam
 * Date: 08/05/2016
 * Time: 19:43
 */


 function toUtf8($string){
    return utf8_encode($string);
}


function prettyPrint($a) {
    echo '<pre>'.print_r($a,1).'</pre>';
}