<?php

function connection(){
    session_start();
    $lhost = "sql110.byetcluster.com";
    $uname = "29596697_1";
    $pwd   = "S[864Pp[Q8";
    $dname = "epiz_29596697_w451";
    
    $con = new mysqli( $lhost, $uname, $pwd, $dname);
    if($con->connect_error){
        echo $con->connect_error;
    }else{
        return $con;
        
        
    }

}