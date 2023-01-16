<?php 


$server = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "test";

$conn = new PDO("mysql:host=" . $server . ";dbname=" . $dbname, $username, $dbpassword);

$searched = $_POST['search'];

$sql = 'SELECT * FROM formtrial';

$result = $conn->query($sql);

echo $result;

echo "<table>";

foreach( $query as $r => $v ){

    echo "<tr>";
    echo "<td>".$v["id"]."</td>";
    echo "<td>".$v["firstName"]."</td>";
    echo "<td>".$v["lastName"]."</td>";
    echo "<td>".$v["mdp"]."</td>";
    echo "</tr>";

}

echo "</table>";


$conn = null;
    

?>