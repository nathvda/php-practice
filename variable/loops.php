<?php

$plates = [1,2,3,4,5,6,7];

foreach($plates as $plate){
    echo $plate.'<br/>';
}

$pronouns = ['I', 'You', 'He/She', 'We', 'You', 'They'];

foreach($pronouns as $p){
    if ($p == 'He/She'){
        echo $p.' codes <br/>'; 
    } else {
        echo $p.' code <br/>'; 
    }
}

$start_value = 1;

while ( $start_value <= 120){
    print_r($start_value);
    echo "<br/>";
    $start_value++;
}

for ( $new_start = 1 ; $new_start <= 120 ; $new_start++ )
{
    print_r($new_start);
    echo "<br/>"; 
}

$people = [
    "Nathalie V.",
    "Marnie",
    "Nathalie G.",
    "Jonathan B.",
    "Laura",
    "Aurore",
    "Benjamin",
    "Corentin",
    "Hugo",
    "Mathilde",
    "Edouard",
    "Lysie",
    "Arno",
    "Jonathan M.",
    "Milo",
    "Nour",
    "Quentin", 
    "Pierre",
    "Virginie",
    "Céline",
    "Dominique"
];

foreach($people as $p){
    print_r($p);
    echo "<br/>";
}

$countries = [
    "FR" => "France",
    "CO" => "Colombie",
    "AR" => "Argentina",
    "ES" => "Spain",
    "AU" => "Australia",
    "BR" => "Brazil",
    "CA" => "Canada",
    "GB" => "United Kingdom",
    "KR" => "Korea",
    "CN" => "China"
];

echo "<select><option>Select a Country</option>";

foreach($countries as $key => $value){

    echo '<option value="'.$key.'">'.$value.'</option>';

}

echo "</select>";



?>