<?php


function renderTemplate($template, $params){

    if (file_exists($template)){
        ob_start();
        extract($params,EXTR_OVERWRITE);
        require_once "$template";
        $html = ob_get_clean();
        return $html;
    }
    else{
        return "";
    }
};