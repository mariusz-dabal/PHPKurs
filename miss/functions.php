<?php 

// function devide($a, $b) {
//     if ($b == 0) {
//         return false;
//     }
//     return $a / $b;
// }

// function mul($a, $b) {
//     return $a * $b;
// }

// function add($a, $b) {
//     return $a + $b;
// }

// function sub($a, $b) {
//     return $a - $b;
// }

// function calc($operator = "add", $a = 2, $b = 2) {
//     if (!isset($operator) || !isset($a) || !isset($b)) {
//         return "Missing argument";
//     } else {

//         switch ($operator) {
//             case 'dev':
//                 return (devide($a, $b)) ? devide($a, $b) : "0 devision!" ;
//                 break;
    
//             case 'add':
//                 return add($a, $b);
//                 break;
    
//             case 'sub':
//                 return sub($a, $b);
//                 break;
    
//             case 'mul':
//                 return mul($a, $b);
//                 break;
                
            
//             default:
//                 echo "Domyślnie dodawanie";
//                 return  add($a, $b);
//                 break;
//         }
//     }
// }


// function formatDate($format) {
//     define("STALA", $format);

//     switch (STALA) {
//         case '1':
//             echo date("Y-m-d");
//             break;

//         case '2':
//             echo date("h:i");
//             break;

//         case '3':
//             echo date("Y-m-d h:i:sa");
//             break;

//         case '4':
//             echo date("l");
//             break;
        
//         default:
//             echo "Ups!";
//             break;
//     }
// }

// define('DATE', 1);
// define('TIME', 2);
// define('DATE_TIME', 3);
// define('DAY_OF_WEEK', 4);
// define('HOUR', 3600);
// define('DAY', 6);
// define('WEEK', 7);
// define('MONTH', 8);

// function getTime($add) {
//     return time() + HOUR;
// }

// function formatDate($format, int $time = null): string {
//     if (is_null($time)) {
//         $time = time();
//     }
//     switch ($format) {
//         case DATE:
//             return date('Y-m-d', $time);
//             break;
//         case TIME:
//             return date('H:i:s', $time);
//             break;
//         case DATE_TIME:
//             return date('Y-m-d H:i:s', $time);
//             break;
//         case DAY_OF_WEEK:
//             return date('l', $time);
//             break;
        
//         default:
//             # code...
//             break;
//     }
// }

// echo formatDate(DATE_TIME, getTime(HOUR));