<?php           function count_island(){  $counterFile = "../count/count_island.dat";             if ( !file_exists( $counterFile ) ) {  if ( !( $handle = fopen( $counterFile, "w" ) ) ) {    die( "Cannot create the counter file." );  } else {    fwrite( $handle, 0 );    fclose( $handle );  } }             if ( !( $handle = fopen( $counterFile, "r" ) ) ) {  die( "Cannot read the counter file." ); }             $counter = (int) fread( $handle, 20 ); fclose( $handle );             $counter++;
             if ( !( $handle = fopen( $counterFile, "w" ) ) ){  die( "Cannot open the counter file for writing." ); }             fwrite( $handle, $counter ); fclose( $handle ); 
         }

         function count_mainland_1(){  $counterFile = "../count/count_mainland_1.dat";             if ( !file_exists( $counterFile ) ) {  if ( !( $handle = fopen( $counterFile, "w" ) ) ) {    die( "Cannot create the counter file." );  } else {    fwrite( $handle, 0 );    fclose( $handle );  } }             if ( !( $handle = fopen( $counterFile, "r" ) ) ) {  die( "Cannot read the counter file." ); }             $counter = (int) fread( $handle, 20 ); fclose( $handle );             $counter++;
             if ( !( $handle = fopen( $counterFile, "w" ) ) ){  die( "Cannot open the counter file for writing." ); }             fwrite( $handle, $counter ); fclose( $handle ); 
         }

         function count_mainland_2(){  $counterFile = "../count/count_mainland_2.dat";             if ( !file_exists( $counterFile ) ) {  if ( !( $handle = fopen( $counterFile, "w" ) ) ) {    die( "Cannot create the counter file." );  } else {    fwrite( $handle, 0 );    fclose( $handle );  } }             if ( !( $handle = fopen( $counterFile, "r" ) ) ) {  die( "Cannot read the counter file." ); }             $counter = (int) fread( $handle, 20 ); fclose( $handle );             $counter++;
             if ( !( $handle = fopen( $counterFile, "w" ) ) ){  die( "Cannot open the counter file for writing." ); }             fwrite( $handle, $counter ); fclose( $handle ); 
         }
?>  