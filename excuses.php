<!DOCTYPE html>
<?php

if (isset($_GET['nameOfChild']) AND isset($_GET['gender']) AND isset($_GET['nameOfTeacher']) AND isset($_GET['reasonType'])){

    $nameOfChild = $_GET['nameOfChild'];
    $gender = $_GET['gender'];
    $nameOfTeacher = $_GET['nameOfTeacher'];
    $reasonType = $_GET['reasonType'];

    $pronoun = "he";
    $possessive = "his";

    if ($gender == "female"){
      global $pronoun; 
      $pronoun = "she";
      $possessive = "her";
    }

    $number = rand(0,4);

    $excuse = "cannot attend";

    if ($reasonType == "illness"){
        $number = rand(0,4);

        global $excuse;

        $illness = [
        $pronoun." just came down with the flu",
        $pronoun." had got a bad cold and is now turning into a parrot",
        $pronoun." drank too much wine and is now laying on the ground",
        $pronoun." has gotten the fluberry and turned into a gigantic berry",
        $pronoun." started to turn into a dragon"];

        $excuse = $illness[$number];
    } else if ($reasonType == "death"){
        $number = rand(0,4);
        
        global $excuse;

        $death = [
        $possessive." pet stone died from a little too much of bathing in the sea yesterday evening",
        $possessive." goldfish died in a soup and we could not retrieve it despite all of our efforts",
        $possessive." pet monkey died after slipping over a banana",
        $possessive." cat climbed over the bed and died of shame after getting stuck there",
        $possessive." donkey forgot that he needed to breath and died a terrible death"];

        $excuse = $death[$number];
    } else if ($reasonType == "activity"){
        $number = rand(0,4);
        
        global $excuse;

        $activity = [
        $pronoun." is currently too busy training to become a superHero to eventually save the world",
        $pronoun." needs to keep peeling tangerines to use their skin as clothes",
        $pronoun." decided that ". $pronoun . " wanted to become a magician",
        $pronoun." took up pottery courses and decided that going to school was not really worth it anymore anyway",
        $pronoun." took croquet classes and is currently planning to take over the world"];

        $excuse = $activity[$number];
    } else if ($reasonType == "other"){
        $number = rand(0,4);
        
        global $excuse;

        $other = [
        $pronoun." joined the dark side and started training as a Jedi",
        $pronoun." went to Atlantis and is now trying to save the world from collapsing onto itself",
        $pronoun." bought so many lollipops that " . $pronoun . "forgot " . $possessive . " own name",
        $pronoun." escaped to wonderland and will probably never come back",
        $pronoun." is asking me to help with finding an excuse"];

        $excuse = $other[$number];
    }

echo "Dear Professor <b>".$nameOfTeacher."</b>,<br/>
I have the regret to inform you that <b>". $nameOfChild . "</b>
will not be able to attend today's class. Unfortunately, ". $pronoun . " is not currently in the right 
condition to attend school because ". $excuse. ". Best regards.";
}

?>