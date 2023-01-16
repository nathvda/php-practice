<html><head>
<link rel="stylesheet" href="./assets/scss/style.css">
</head>
<body>

<?php 

require __DIR__ . '/../vendor/autoload.php';

Dotenv\Dotenv::createImmutable(__DIR__ . '/')->load();

$server = $_ENV['HOST'];
$username = $_ENV['USER'];
$dbpassword = $_ENV['PASSWORD'];
$dbname = $_ENV['DBNAME'];

$conn = new PDO("mysql:host=" . $server . ";dbname=" . $dbname, $username, $dbpassword);

if (isset($_POST['search'])){

$searched = $_POST['search'];

} else {
    $searched = "";
}

$sql = 'SELECT * FROM formtrial WHERE firstName="'.$searched.'"';

$query = $conn->prepare($sql);
$query -> execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo '<table class="results"><thead><tr><td>ID</td><td>FIRSTNAME</td><td>LASTNAME</td><td>MDP</td></tr></thead>';

foreach( $result as $r => $v ){

    echo '<tr class="line">';
    echo "<td>".$v["id"]."</td>";
    echo "<td>".$v["firstName"]."</td>";
    echo "<td>".$v["lastName"]."</td>";
    echo "<td>".$v["mdp"]."</td>";
    echo "</tr>";

}

echo "</table>";


$conn = null;
    

?>
    
    <?php
session_start();

// establishing the different values for error messages;
$name = $email = $firstname = $password = $confirmpassword = $phone = $rating = "";
$checkError = $nameErr = $emailErr = $firstnameErr = $passwordErr = $confirmpasswordErr = $phoneErr = $ratingErr = "";

$errors= array();

if (isset($_SESSION["name"])){
    $name = $_SESSION["name"];
}

if (isset($_SESSION["firstname"])){
    $name = $_SESSION["firstname"];
}

if (isset($_SESSION["password"])){
    $name = $_SESSION["password"];
}

if (isset($_SESSION["confirmpassword"])){
    $name = $_SESSION["confirmpassword"];
}

if (isset($_SESSION["phone"])){
    $name = $_SESSION["phone"];
}

if (isset($_SESSION["email"])){
    $name = $_SESSION["email"];
}

if (isset($_SESSION["rating"])){
    $name = $_SESSION["rating"];
}





// if form is being sent for check, won't execute otherwise.
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // if no value provided ( !!! not if invalid data ).
        if (empty($_POST["name"])){
        $nameErr = '<span class="error">You must provide a name</span>';
        $errors[] = "name";
    } else {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $_SESSION["name"] = $name;

    }

    if (empty($_POST["firstname"])){
        $firstnameErr = '<span class="error">You must provide a firstname</span>';
        $errors[] = "firstname";
    } else {
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $_SESSION["firstname"] = $firstname;
    }
    
    if (empty($_POST["password"])){
        $passwordErr = '<span class="error">You must provide a password</span>';
        $errors[] = "password";
    } else {
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

        if (strlen($password) >= 8){
            $_SESSION["password"] = $password;
        } else {
            $passwordErr = '<span class="error">Your password must be at least 8 characters long</span>';
            $errors[] = "email";

        }

    }

    if (empty($_POST["confirmpassword"])){
        $confirmpasswordErr = '<span class="error">You must confirm the password</span>';
        $checkError = "notconfirmed";
        $errors[] = "confirmation";
    } else {
        $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_STRING);

        if ($confirmpassword == $password){
            $_SESSION["confirmpassword"] = $confirmpassword;

        } else {
            $confirmpasswordErr = '<span class="error">Password must match.</span>';
            $errors[] = "email";

        }

    }

    if (empty($_POST["phone"])){
        $phoneErr = '<span class="error">You must provide a phone number</span>';
        $errors[] = "phone";
    } else {
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
        
        if (strlen($phone) == 10){
            $_SESSION["phone"] = $phone;
        } else {
            $errors['phone'] = "This phone number is invalid.";
            $phoneErr = '<span class="error">You must provide a valid phone number</span>';
            $errors[] = "email";

        }
    }


    if (empty($_POST["email"])){
        $emailErr = '<span class="error">You must provide an email</span>';
        $errors[] = "email";
    } else { 
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        if (true == filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION["email"] = $email;
        } else {
            $emailErr = '<span class="error">You must provide a valid email</span>';
            $errors[] = "email";

        }

        

    }
   

    if (empty($_POST["rating"])){
        $ratingErr = '<span class="error">You must give a rating</span>';
        $errors[] = "rating";
    } else {
        $rating = filter_var($_POST['rating'], FILTER_SANITIZE_NUMBER_INT);
        
        if (true == filter_var($rating, FILTER_VALIDATE_INT)){
            $_SESSION["rating"] = $rating;
        } else {
            $ratingErr = '<span class="error">Note must be an integer</span>';
            $errors[] = "rating";

        }
        

    }
    
    
    if (count($errors) == 0){

        $server = $_ENV['HOST'];
        $username = $_ENV['USER'];
        $dbpassword = $_ENV['PASSWORD'];
        $dbname = $_ENV['DBNAME'];
        
$conn = new PDO("mysql:host=" . $server . ";dbname=" . $dbname, $username, $dbpassword);

$sql = "INSERT INTO formtrial(lastName, firstName, mdp) VALUES ('".$name."', '".$firstname."', '".$password."')";

$result = $conn->prepare($sql);
$result -> execute();

$conn = null;

session_destroy();
    
}

}

?>

<form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <label for="">Name</label>
    <input type="text" id="" name="name" value="<?php echo $name;?>">
    <?php echo $nameErr;?>
    <label for="">Firstname</label>
    <input type="text" id="" name="firstname" value="<?php echo $firstname?>">
    <?php echo $firstnameErr;?>
    <label for="">Password</label>
    <input type="password" id="" name="password" value="<?php echo $password;?>">
    <?php echo $passwordErr;?>
    <label for="">Confirm password</label>
    <input type="password" class="<?php echo $checkError;?>" id="" name="confirmpassword" value="<?php echo $confirmpassword;?>">
    <?php echo $confirmpasswordErr;?>
    <label for="">Phone Number</label>
    <input type="text" id="" name="phone" value="<?php echo $phone;?>">
    <?php echo $phoneErr;?>
    <label for="">E-mail</label>
    <input type="mail" id="" name="email" value="<?php echo $email;?>">
    <?php echo $emailErr;?>
    <label for="">Your rating</label>
    <input type="number" min="0" max="5" id="" name="rating" value="<?php echo $rating;?>">
    <?php echo $ratingErr;?>
    <input type="submit" value="validate">
   </form>

   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
   <label for="search">search terms</label>
   <input type="text" id="search" name="search">
   <input type="submit" value="search">

   </form>

  
</body></html>