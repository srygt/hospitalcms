<?php

/**
 * @param float $amount
 * @return string
 */
function getMoneyFormat(float $amount) : string
{
    return number_format($amount, 2, ',', '.');
}

function permaurl($name) {

    $turkce=array(":","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","R","S","T","U","V","Y","Z","Q","X","W","Ê","ê","Î","î","Û","û","ş","Ş","ı","(",")","'","ü","Ü","ö","Ö","ç","Ç"," ","/","*","?","ş","Ş","ı","ğ","Ğ","İ","ö","Ö","Ç","ç","ü","Ü");
    
    $duzgun=array("-","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","r","s","t","u","v","y","z","q","x","w","e","e","i","i","u","u","s","s","i","","","","u","u","o","o","c","c","-","-","-","","s","s","i","g","g","i","o","o","c","c","u","u");
    
    $name =str_replace($turkce,$duzgun,$name);
    
    $name = preg_replace("@[^A-Za-z0-9-_]+@i","",$name);
    
    return $name;
}