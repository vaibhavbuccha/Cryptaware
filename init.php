<?php

spl_autoload_register(function($class){
    include_once "lib/$class.php";
});


?>