<?php
    $filename = '733d5d73.txt';
    $message = $_POST["message"];
    $message = date("Y-m-d H:i:s")."\n".$message."\n\n";
    if(file_put_contents($filename, $message, FILE_APPEND | LOCK_EX) === FALSE){
        echo "F";
    } else {
        echo "T";
    }