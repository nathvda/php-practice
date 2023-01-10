<?php
echo '<form method="post" action="">
<label>Are you a human, a cat or a unicorn?</label>
<input type="radio" name="creature" id="human" value="human"/>
<label for="human">human</label>
<input type="radio" name="creature" id="cat" value="cat"/>
<label for="cat">cat</label>
<input type="radio" name="creature" id="unicorn" value="unicorn"/>
<label for="unicorn">unicorn</label>
<input type="submit" value="envoyer">
</form>';

if (isset($_POST['creature'])){  
$creature = $_POST['creature'];
$lien_image;

$hello = ($creature == "human") ? $lien_image = "https://media.tenor.com/DtfvZ30NR0EAAAAC/human-body-blue.gif" : (($creature == "cat") ? $lien_image = "https://media.tenor.com/f_saBHiUTz0AAAAM/cute-cat.gif" : $lien_image = "https://i.pinimg.com/originals/87/b8/e8/87b8e8bbbe27e7e19447563f7fe0a69f.gif");
    echo '<img src="'.$hello.'">';
}

?>
