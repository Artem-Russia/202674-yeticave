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

function bet_time($arg_1){
    $time_passed=(int)(time()-$arg_1);
    if($time_passed>=86400){
        $time_passed_date=date("d.m.y", $arg_1);
        $time_passed_m_h=date("H.i",$arg_1);
        return "$time_passed_date в $time_passed_m_h";
    }
    if($time_passed<3600){
        $time_passed_m=$time_passed/60;
        return "$time_passed_m минут назад";
    }
    else{
        $time_passed_h=$time_passed/3600;
        return "$time_passed_h часов назад";
    }
};