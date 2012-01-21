<?php


// function to escape form special sql charactors (prevent sql injection attacs)
function Secure_mysql($value){

    $magic_quotes = get_magic_quotes_gpc();
    $function_avi = function_exists("mysql_real_escape_string");

    if($function_avi){
        if($magic_quotes){

            $value = stripcslashes($value);
        }

        $value = mysql_real_escape_string($value, Db::Connect());


    }else{

        if(!$magic_quotes){

            $value = addslashes($value);
        }

    }




 return $value;
}

// easy function to redirct to a page
function redirect($val){
    
     $header = header( "Location: {$val}" ) ;
    
}


function showMessage($msg){




                     echo "<script language=javascript>window.onload = alert('{$msg}')</script>";



    }





?>
