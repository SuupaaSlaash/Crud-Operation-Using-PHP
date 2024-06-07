<?php
session_start();

function isSessionActive(){
    if(isset($_SESSION['username'])){
        return true;
    }else{
        return false;
    }
}

?>