<?php

// define( 'STORAGE_FILE', 'data.csv' );
//  if ( file_exists( STORAGE_FILE ) ) {
//     $data = file( STORAGE_FILE );

//     foreach ( $data as $row ) {
//         $item = explode( ",", $row );
        
//         echo "<p>";
//         $netPrice = round( $item[2] );
//         $grossPrice = round((float)$item[2] + (float)$item[2] * ((float)$item[3] / 100));
    
//         echo gettype($item[3]);
//         echo "Product <b>{$item[0]}</b> is available in <b>{$item[1]}</b>. Nett price is <b>{$item[2]}</b>, tax is: <b>{$item[3]}</b>. Gross is
//         <b>{$grossPrice}</b>";

//         echo "</p>";
//     }
//  } else {
//     echo "File does not exists";
//     } 

// function setNewPrice($price) {
//     if ( file_exists( STORAGE_FILE ) ) {
//         $data = file( STORAGE_FILE );
//         $newData = [];
//         $price = $price/100;

//         echo "<h2>Ceny po zwiększeniu o 10%</h2>";

//         foreach ( $data as $row ) {
//             $item = explode( ",", $row );
//             $item[2] = $item[2] + $item[2] * ($price);

//             $netPrice = round( $item[2] );
//             $grossPrice = round((float)$item[2] + (float)$item[2] * ((float)$item[3] / 100));
        
//             echo "Product <b>{$item[0]}</b> is available in <b>{$item[1]}</b>. Nett price is <b>{$item[2]}</b>, tax is: <b>{$item[3]}</b>. Gross is
//             <b>{$grossPrice}</b>";

//             echo "</p>";
            
//             $row = implode(',', $item);
//             array_push($newData, $row);
//         }

//         file_put_contents(STORAGE_FILE, $newData);
        

//     } else {
//         echo "File does not exists";
//         } 
// }


// setNewPrice(10);


