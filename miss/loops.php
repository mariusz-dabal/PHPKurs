<?php 

// echo "<h1>LOOPS!</h1>";

// $number = $_GET['num'];

// echo $number;

// <?php 

// $liczba = $_GET['liczba'];


// if ($liczba > 100 || !(is_numeric($liczba))){
//     die();
// } else {

//     echo "<h2>Pętla FOR</h2>";

//     for ($i = 0; $i < $liczba; $i++) {
//         echo "iteracja nr $i</br>";
//     }

//     echo "<h2>Pętla WHILE</h2>";

//     $i = 0;
//     while ($i < $liczba) {
//         echo "iteracja nr $i</br>";
//         $i++;
//     }

//     echo "<h2>Pętla DO...WHILE</h2>";

//     $j = 0;
//     do {
//         echo "iteracja nr $j</br>";
//         $j++;
//     } while ($j < $liczba);
// }

// $people = ["Jim", "Mike", "Dwight"];

// foreach ($people as $person) {
//     echo "$person </br>";
// }

// $p = null;

// if (!(isset($_GET['p']))) {
//     echo "nie ma parametru 'p'!";
//     die();
// } else {
//     $p = $_GET['p'];
// }

// switch ($p) {
//     case 's1':
//         echo "Wybrałeś s1!";
//         break;

//     case 's2':
//         echo "Wybrałeś s2!";
//         break;

//     case 's3':
//         echo "Wybrałeś s3!";
//         break;
    
//     default:
//         echo "Nie ma takiego parametru!!!!11111!";
//         break;
// }

// strlen - długość stringa
// strpos / stripos zwraca wystąpienia stringa

// $search = null;

// if (!(isset($_GET['search']))) {
//     echo "nie ma parametru 'search'!";
//     die();
// } else {
//     $search = $_GET['search'];
// }

// $string = "Ala ma kota.";

// $result = null;

// $result = stripos($string, $search);

// if ($result === false) {
//     echo "Nie znaleziono szukanej frazy.";
// } else {
//     echo "Szukana litera jest na pozycji: $result";
// }

// implode/explode
// serialize() / unserialize()


// <?php 

// $arr = [];

// for ($i = 0; $i < 5; $i++) {
//     array_push($arr, "item $i</br>");
//     echo $arr[$i];
// }

// echo "</br>";
// echo "</br>";

// array_shift($arr);
// print_r($arr);

// echo "</br>";
// echo "</br>";

// array_unshift($arr, 25);
// print_r($arr);

// echo "</br>";
// echo "</br>";

// array_push($arr, 50);
// print_r($arr);

// echo "</br>";
// echo "</br>";

// array_pop($arr);
// print_r($arr);
