<?php
function printWords( $word )
{
    $vocal =array();
    $consonant =array();
    if( preg_match( "/[^a-zA-Z]/", $word ) )
    {
        echo "terjadi kesalahan";
        return;
    }
    
    for( $i =0; $i< strlen($word) ;$i++) {
        
        if( preg_match( "/[aAeEiIoOuU]/", $word[$i] ) )
            array_push( $vocal, $word[$i] );
        else 
            array_push( $consonant, $word[$i] );
    }
    
    foreach ($vocal as $letter) {
        echo $letter."\n";
    }
    
    foreach ($consonant as $letter) {
        echo $letter."\n";
    }
    
}

echo printWords("1");
