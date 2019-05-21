<?php


// encryption

$handle = fopen("file.txt","rb");
$read = fread($handle,filesize("file.txt"));
$encrypted_text = base64_encode($read); 
echo $encrypted_text;

fclose($handle);

$newhandle = fopen("enc.txt","w");
$write = fwrite($newhandle,$encrypted_text);
fclose($newhandle);


// decryption
$handle = fopen("enc.txt","rb");
$read = fread($handle,filesize("enc.txt"));
$decrypted_text = base64_decode($read); 
echo $decrypted_text;


fclose($handle);

$newhandle = fopen("dec.txt","w");
$write = fwrite($newhandle,$decrypted_text);
fclose($newhandle);

?>