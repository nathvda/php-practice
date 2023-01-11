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


$soulmate = [
    'firstname' => 'Soulmate',
    'lastname' => 'SoulmateName',
    'age' => 28,
    'soccer' => false,
    'favorite_season' => "winter",
    'favorite_movies' => $favorite_movies,
    ];
    
    $soulmate['hobbies'] = ['eating', 'cooking', 'flying', 'travelling', 'kpop', 'dancing'];
   
echo '<pre>';
print_r($soulmate);
echo '</pre>';

$result = array_intersect($me['hobbies'], $soulmate['hobbies']);
$result2 = array_unique(array_merge($me['hobbies'], $soulmate['hobbies']));

echo '<pre>';
print_r($result);
print_r($result2);
echo '</pre>';


$web_development = ['frontend' => [], 'backend' => []];
var_dump($web_development);
echo "<br>";

$web_development['frontend'][] = 'xhtml';
var_dump($web_development);
echo "<br>";

$web_development['backend'][] = 'Ruby on Rails';
var_dump($web_development);
echo "<br>";

$web_development['frontend'][] = 'CSS';
var_dump($web_development);
echo "<br>";

$web_development['frontend'][] = 'Flash';
var_dump($web_development);
echo "<br>";

$web_development['frontend'][] = 'Javascript';
var_dump($web_development);
echo "<br>";

$web_development['frontend'][0] = "html";
var_dump($web_development);
echo "<br>";

unset($web_development['frontend'][2]);
var_dump($web_development);
echo "<br>";



?>

