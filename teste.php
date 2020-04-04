<?php

$a = "n ymnsp bj flwjj, ymj ufxy nx tajw. ljtwlj b. gzxm";
$cifrado = $a;
$a = strtolower($a); // Lower case string
$a = str_split($a); // Transform string to vector
$decifrado = []; // Empty array


for($i = 0; $i < count($a); ++$i) {
    
    if (ctype_alpha($a[$i])){

        
            if ($a[$i] == 'a'){
                $a[$i] = 'v';
            }
            elseif ($a[$i] == 'b') {
                $a[$i] = 'w';
            }
            elseif ($a[$i] == 'c') {
                $a[$i] = 'x';
            }
            elseif ($a[$i] == 'd') {
                $a[$i] = 'y';
            }
            elseif ($a[$i] == 'e') {
                $a[$i] = 'z';
            }
            else {
                $a[$i] = chr(ord($a[$i])-5);
            }
         $decifrado[$i] = $a[$i];

    }
    else {
        $decifrado[$i] = $a[$i];
    }

}
//print_r($cifrado);

$decifrado = implode($decifrado);
print_r($cifrado);
echo "<br>";
print_r($decifrado);
$resumo_criptografico = (sha1($decifrado));
echo "<br>";
print_r($resumo_criptografico);
/*
$url = 'https://api.codenation.dev/v1/challenge/dev-ps/submit-solution?token=4bb4feafa70a483e53c5e770539c60c3e785e032';

$data = array('decifrado' => '5', 'decifrado' => '$a[$i]');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
var_dump($http_response_header);
if ($result === FALSE) 

var_dump($result);
*/

?>