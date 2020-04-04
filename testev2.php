<?php

$a = "abcdefg.h.i.j.k.AAAAAAAAAAAAA.r..st.u.v..w.xyz";
$a = strtolower($a); // Lower case string
$a = str_split($a); // Transform string to vector


for($i = 0; $i < count($a); ++$i) {
    
    if (ctype_alpha($a[$i])){
        
            if ($a[$i] == 'x'){
                $a[$i] = 'a';
            }
            elseif ($a[$i] == 'y') {
                $a[$i] = 'b';
            }
            elseif ($a[$i] == 'z') {
                $a[$i] = 'c';
            }
            else {
                $a[$i] = chr(ord($a[$i])+3);
            }
        print_r($a[$i]);
    }
    else {
        print_r($a[$i]);
    }
}


$url = 'https://api.codenation.dev/v1/challenge/dev-ps/generate-data?token=4bb4feafa70a483e53c5e770539c60c3e785e032';
$data = array('key1' => 'value1', 'key2' => 'value2');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);


?>