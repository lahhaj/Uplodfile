<?php

#Author  : Lukman Nurul Hakim
#Support : Lukman


$my_apikey = "kode Token"; 
$number = "Nomor Hp"; 
$type = "IN"; 
$markaspulled = "0"; 
$getnotpulledonly = "0"; 
$api_url  = "Link whatsapp API"; 
$api_url .= "?apikey=". urlencode ($my_apikey); 
$api_url .=	"&number=". urlencode ($number); 
$api_url .= "&type=". urlencode ($type); 
$api_url .= "&markaspulled=". urlencode ($markaspulled); 
$api_url .= "&getnotpulledonly=". urlencode ($getnotpulledonly); 
$my_json_result = file_get_contents($api_url, false); 
$my_php_arr = json_decode($my_json_result); 
foreach($my_php_arr as $item) 
{ 
  $from_temp = $item->from; 
  $to_temp = $item->to; 
  $text_temp = $item->text; 
  $type_temp = $item->type; 
   echo "Pengirim : ".$from_temp;
  echo "<br>Pesan :".$text_temp;
  echo "<hr>"; 
}
?>
