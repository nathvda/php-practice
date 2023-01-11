<?php

$family = ["mother", "sister1", "sister2", "father", "ina", "luna", "darling"];

print_r($family);

$favorite_recipe = ["Cook the rice", "cut the vegetables", "open the sauce", "pour the sauce in"];

print_r($favorite_recipe);

$favorite_movies = ["titanic", "inception", "treasure planet"];

echo $favorite_movies[1];

echo '<pre>';
print_r($favorite_movies);
echo '</pre>';

var_dump($favorite_movies);

echo "<br>";

array_push($family, 'Rosanna');
var_dump($family);

echo "<br>";
 
$family[] = 'Momo';
var_dump($family);

$planets = ['first' => 'mercury', 'second' => 'venus', 'third' => 'earth', 'fourth' => 'mars' , 'fifth' => 'jupiter', 'sixth' => 'saturn', 'seventh' => 'uranus', 'eighth' => 'neptun'];

echo '<pre>';
print_r($planets);
echo '</pre>';

echo $planets['first'];


$me = [
'firstname' => 'Nathalie',
'lastname' => 'VDA',
'age' => 28,
'soccer' => false,
'favorite_season' => "winter",
'favorite_movies' => $favorite_movies,
];

$me['hobbies'] = ['drawing', 'cooking', 'coding', '3D modelling', 'kpop'];

$mom = [
    'firstname' => 'Sabrina',
    'age' => 50,
    'soccer' => false,
    'favorite_season' => "summer",
    'favorite_movies' => $favorite_movies,
    ];

$mom['hobbies'] = ['cats', 'sewing', 'taking pictures'];

$me['mother'] = $mom;

echo '<pre>';
print_r($me);
echo '</pre>';

echo "mom's hobbies: ".count($mom['hobbies']);
echo "<br>";
echo "my hobbies: ".count($me['hobbies']);
echo "<br>";
echo "total hobbies: ".count($me['hobbies']) + count($mom['hobbies']);
echo "<br>";

$me['hobbies'][] = 'watching dramas';

echo '<pre>';
print_r($me);
echo '</pre>';

$me['lastname'] = 'Durand';

echo '<pre>';
print_r($me);
echo '</pre>';

?>

