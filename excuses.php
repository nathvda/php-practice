<?php

if (isset($_GET['nameOfChild']) AND isset($_GET['gender']) AND isset($_GET['nameOfTeacher']) AND isset($_GET['reasonType'])){

    $nameOfChild = $_GET['nameOfChild'];
    $gender = $_GET['gender'];
    $nameOfTeacher = $_GET['nameOfTeacher'];
    $reasonType = $_GET['reasonType'];

    $pronoun = "he";

    if ($gender == "female"){
      global $pronoun; 
      $pronoun = "she";
    }

    $number = rand(0,4);

    $illness = [
        "just came down with the flu",
     "had got a bad cold and is now turning into a parrot",
      "drank too much wine and is now laying on the ground",
       "has gotten the fluberry and turned into a gigantic berry",
    "started to turn into a dragon"
];

echo "Dear Professor <b>".$nameOfTeacher."</b>,<br/>
I have the regret to inform you that <b>". $nameOfChild . "</b>
will not be able to attend today's class. Unfortunately, ". $pronoun . " is not currently in the right 
condition to attend school because ". $pronoun ." ". $illness[0];
}

?>