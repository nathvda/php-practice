<?php

$toPart = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";

function shuffle_text($toShuffle){
$divided = explode(" ",$toShuffle);

foreach ($divided as $key => $d){

$newString = substr($d, 1, strlen($d)-2);

$divided[$key] = $d[0].str_shuffle($newString).$d[-1];


}

echo join(" ", $divided);

}

shuffle_text($toPart);



?>
