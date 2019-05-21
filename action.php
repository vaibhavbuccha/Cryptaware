<?php

include "init.php";

if(isset($_POST['enc'])){
    $file_addr = $_FILES['doc']['tmp_name'];
    $file_name = $_FILES['doc']['name'];
    // $file_typ = $_FILES['doc']['type'];
    $handle = fopen($file_addr,"rb");
    $read = fread($handle,filesize($file_addr));
    $encrypted_text = base64_encode($read); 
    // echo $encrypted_text;

    fclose($handle);

    $newhandle = fopen("enc/$file_name","w");
    $write = fwrite($newhandle,$encrypted_text);
    fclose($newhandle);
    
   
    header("location:index.php?esuccess=true");
}


if(isset($_POST['dec'])){
    $file_addr = $_FILES['doc']['tmp_name'];
    // $file_typ = $_FILES['doc']['type'];
    $file_name = $_FILES['doc']['name'];
    $handle = fopen($file_addr,"rb");
    $read = fread($handle,filesize($file_addr));
    $decrypted_text = base64_decode($read); 
    // echo $encrypted_text;

    fclose($handle);

    $newhandle = fopen("dec/$file_name","w");
    $write = fwrite($newhandle,$decrypted_text);
    fclose($newhandle);
    header("location:index.php?dsuccess=true");
}





?>