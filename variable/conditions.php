<?php

/**
 * Series of exercices on PHP conditionnal structures.
 */

 // 1.1 Clean your room Exercise.

//  $room_is_filthy = true;

//  if ($room_is_filthy == true){
//     echo "This place is dirty, please clean it.";
//     cleanup_room();
//     echo "<br>Now that's better";
//     $room_is_filthy = false; 
//  } else {
//     echo "<br>Very nice, this place is clean!";
//  }

 // 1.2 Clean your room Exercise, improved

 $possible_states = ['clean', 'dirty', 'hell', 'transparent'];
 $room_is_filthy = $possible_states[3];

 if ($room_is_filthy == 'clean') {
    echo "This place is so clean...";
 } else if ($room_is_filthy == 'dirty'){
    echo "Welp, this place could use some cleaning...";
 } else if ($room_is_filthy == 'hell'){
    echo "What... What is this place, again?";
 } else {
    echo "Wow... Is there even a room anymore?";
 }

 // 2. Different greetings Exercise.

 $now = date("h");

 if ($now >= 5 AND $now <= 9){
    echo "Good Morning!";
 } else if ($now >=9 AND $now <= 12){
    echo "Good day!";
 } else if ($now >=12 AND $now <= 16){
    echo "Good Afternoon!";
 } else if ($now >=16 AND $now <= 21){
    echo "Good Evening!";
 } else if ($now >=21 OR $now <= 4){
    echo "Good Night!";
 }

 echo "<br><br><hr><br><br>";

 // 3. Display a different greeting according to the user's age.

 echo '<form method="get" action="">
 <label for="age">
 Please type your age:</label>
 <input type="number" name="age" required>
 <label for="gender">Choose your gender:</label>
 <input type="radio" name="gender" value="male" id="male">
 <label for="male">Male</label>
 <input type="radio" name="gender" value="female" id="female">
 <label for="female">Female</label>
 <input type="radio" name="gender" value="other" id="other">
 <label for="other">Other</label>
 <label for="gender">Do you speak English ?</label>
 <input type="radio" name="language" value="yes" id="yes">
 <label for="male">Yes</label>
 <input type="radio" name="language" value="no" id="no">
 <label for="female">No</label>
 <input type="submit" name="submit" value="Greet me now">
 </form>';

 if (isset($_GET['age']) AND isset($_GET['gender']) AND isset($_GET['language'])){
if ($_GET['age'] < 12){

    if ($_GET['gender'] == "female"){

        if ($_GET['language'] == "yes"){

            echo "Hello miss Kiddo!";
        } else { 
            echo "Aloha miss Kiddo";
        }
    } else if ($_GET['gender'] == "male"){
            
        if ($_GET['language'] == "yes"){
        
        echo "Hello mister Kiddo!";}
        else {
            echo "Aloha mister Kiddo!";
        }
   } else {

    if ($_GET['language'] == "yes"){
    
    echo "Hello young person!";}
    else {
        echo "Aloha young person!";
    }
   }
    
} else if ($_GET['age'] >= 12 AND $_GET['age'] < 18){
    if ($_GET['gender'] == "female"){

        if ($_GET['language'] == "yes"){

            echo "Hello miss Teen!";
        } else { 
            echo "Aloha miss Teen";
        }
    } else if ($_GET['gender'] == "male"){
            
        if ($_GET['language'] == "yes"){
        
        echo "Hello mister Teen!";}
        else {
            echo "Aloha mister Teen!";
        }
   } else {

    if ($_GET['language'] == "yes"){
    
    echo "Hello teen person!";}
    else {
        echo "Aloha teen person!";
    }
   }
} else if ($_GET['age'] >= 18 AND $_GET['age'] <= 115){
    if ($_GET['gender'] == "female"){

        if ($_GET['language'] == "yes"){

            echo "Hello miss Adult!";
        } else { 
            echo "Aloha miss Adult!";
        }
    } else if ($_GET['gender'] == "male"){
            
        if ($_GET['language'] == "yes"){
        
        echo "Hello mister Adult!";}
        else {
            echo "Aloha mister Adult!";
        }
   } else {

    if ($_GET['language'] == "yes"){
    
    echo "Hello Adult person!";}
    else {
        echo "Aloha Adult person!";
    }
   }
} else {
    echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you?";
}
 
 }
 // 4. Display a different greeting according to the user's age and gender. => See above
 // 5. Display a different greeting according to the user's mothertong => See above

 echo '<form method="get" action="">
 <label for="age">
 Please type your age:</label>
 <input type="number" name="age" required>
 <label for="gender">Choose your gender:</label>
 <input type="radio" name="gender" value="male" id="male">
 <label for="male">Male</label>
 <input type="radio" name="gender" value="female" id="female">
 <label for="female">Female</label>
 <input type="submit" name="submit" value="Join the team">
 </form>';

 $is_Valid = "Sorry, you don't fit the criteria";

if (isset($_GET['age']) && isset($_GET['gender'])){
    if ($_GET['age'] >= 21 AND $_GET['age'] <= 40 AND $_GET['gender'] == "female"){
        $is_Valid = "Welcome to the team";
    }
    echo $is_Valid;
 }

 echo '<br><br><hr><br><br>';

 echo '<form><label for="grade">
 Please enter a grade:</label>
 <input type="number"  min="0" name="grade" required>
 <input type="submit" name="submit" value="Grade"></form>';


 if (isset($_GET['grade'])){
    if ($_GET['grade'] < 4){
        echo "This work is really bad. What a dumb kid!";
    } else if ($_GET['grade'] >= 5 AND $_GET['grade'] < 10 ){
        echo "This is not sufficient. More studying is required.";
    }  else if ($_GET['grade'] == 10){
        echo "barely enough!";
    }  else if ($_GET['grade'] >= 11 AND $_GET['grade'] < 15){
        echo "Not bad!";
    }  else if ($_GET['grade'] >= 15 AND $_GET['grade'] < 19){
        echo "Bravo, bravissimo!";
    }  else if ($_GET['grade'] >= 19){
        echo "Too good to be true : confront the cheater!";
    }
 }


 ?>