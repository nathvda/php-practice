<!DOCTYPE html>
<html>
<body>
<?php
$name = "Nathalie";
echo "<p>Hi! My name is ".$name.".</p>";

$age = 28;
echo "<p>I am ".$age." years old.</p>";

$eyeColor = "green";
echo "<p>My eyes are ".$eyeColor.".</p>";

$family = array(0 => 'Mother', 1 => 'Sister', 2 => 'Sister2', 3=> 'Father', 4 => 'TheCats', 5 => 'TheDogs');
echo $family[0];

$hungryOrNot = true;

$temperature = 20;

if ($temperature >= 15){
    $clothes = "tank top";
    $should_i_wear_a_scarf = false;
} else {
    $clothes = "big coat";
    $should_i_wear_a_scarf = true;
}

if ($should_i_wear_a_scarf == true){
    grab_scarf_from_door_hanger();
}

cover_my_chest_with($clothes);

if ($age <= 12 AND $language == "English"){
    echo "Hello kiddo";
} else {
    echo "Good day stranger!";
}

$important_info = "Using php before HTML is a best practice because once you use HTML you go to the client side and you can do less operations."
?>
</body></html>