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

$str = "julian";

echo ucfirst($str);
echo date("Y");
echo date("F jS Y H-i-s");

function sum($a,$b){

    if (gettype($a) == "integer" && gettype($b) == "integer"){
    return $a + $b;
} else {
    echo "Error: argument is the not a number." ;
}

}

echo sum(8,6);

$acro = "We Love Pomegranate";
$acro2 = "In the grand scheme of things we are but insects waiting for our doom";
$acro3 = "In code we trust!";


function to_acronym($toacro){
    $str = explode(" ",$toacro);
    $word = "";
    foreach ($str as $s){
        echo $word.ucfirst($s[0]);
    }

}

to_acronym($acro);
to_acronym($acro2);
to_acronym($acro3);

function replace_ph($letters){
   echo str_replace("ae", "æ", $letters);
}

replace_ph("caecotrophie");

function replace_ae($letters){
    echo str_replace("æ", "ae", $letters);
 }
 
 replace_ae("cæcotrophie");



 function feedback ($message, $class = "info"){
    return '<div class="'.$class.'">'.$message.'</div>';
 }

 echo feedback("Bonjour je suis un message d'erreur", "error");
 echo feedback("Bonjour je suis un message de notification", "info");
 echo feedback("Bonjour je suis un message d'avertissement", "warning");
 echo feedback("Bonjour je suis un message qui s'ignore");


echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");

function calculate_cone_volume($radius, $height){
    $volume = $radius * $radius * 3.14 * $height * (1/3);
    return  'The volume of a cone which ray is '.$radius.' and height is '.$height." = ".$volume.' cm<sup>3</sup><br />';  
}

echo calculate_cone_volume(4,8);
echo calculate_cone_volume(1,8);
echo calculate_cone_volume(5,1);
echo calculate_cone_volume(8,1);

?>

