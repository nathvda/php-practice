<?php
echo '<form method="get" action="">
<label>What is your gender?</label>
<input type="radio" name="gender" id="female" value="female"/>
<label for="female">F</label>
<input type="radio" name="gender" id="male" value="male"/>
<label for="male">M</label>
<input type="submit" value="envoyer">
</form>';

$gender = $_GET['gender'];

$hello = ($gender == "female") ? "Hello Miss" : "Hello Mister";
echo $hello;



?>
