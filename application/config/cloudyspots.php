<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Ecryption key
| -------------------------------------------------------------------
| This stores the encryption key used into passwords
|
*/

$config["encrypt"] =
    array(
        "key"  => "Today is cloudy",
        "type" => "md5",
    );
    
    
/*
| -------------------------------------------------------------------
|  Not redirect
| -------------------------------------------------------------------
| What pages(controllers) will be not necessary a redirect to login
|
*/

$config["nredirect"] =
    array(
        "login",
    );
