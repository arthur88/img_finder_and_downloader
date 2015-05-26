<?php
function save_image($url){
 $exp = explode('/', $url);
 $ch = curl_init($url);
 $fp = fopen(getcwd().'/imgs/'. $exp[4].'', 'wb');
 curl_setopt($ch, CURLOPT_FILE, $fp);
 curl_setopt($ch, CURLOPT_HEADER, 0); 
 curl_exec($ch);
 curl_close($ch);
 fclose($fp);
}

for($i = 0; $i <= 9999; $i++){
  $url = 'http://www.mywebsite.com/imgs/'.$i.'.jpg';
  $img_size = GetImageSize($url);
  if (!empty($img_size)) {  save_image($url);   } else {}
}

