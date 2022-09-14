<?php 
    include_once "system/libs/main.php";
    include_once "system/libs/DController.php";
    
    $url = isset($_GET['url']) ? $_GET['url'] : NuLL;
    if ($url != NULL) {
        $url = rtrim($url,'/');
        $url = explode("/",$url);
    } else {
        unset($url);
    }
    
   
    // $array_controller = $url[0];
    if ( isset($url[0])) {
        include "app/controller/$url[0].php";
        $ctrl = new $url[0]();
        if (isset($url[2]) ) {
            $ctrl-> $url[1]($url[2]);
        } else {
            if (isset($url[1])) {
                $ctrl->$url[1]();
            } else {
                
            }
            
        }
        
    }else{
        
    }
    // $array_controller = $url[0];
    // $array_method = $url[1];
    // $array_param = $url[2];
    

    // $ctrl-> $array_method($array_param);
    // echo $url[1];

    
    // echo $controller = $url[0]."<br>";
    // echo $method = $url[1]."<br>";
    // echo $prame = $url[2];
    
    
?>