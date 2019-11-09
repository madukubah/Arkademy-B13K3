<?php



function username( $username )
{
    if(strlen( $username ) < 5 )return false;
    if( preg_match('/[^a-z]/', $username) )
        return false;
    
    return true;
}

function password( $password )
{
    if(strlen( $password ) != 7 )return false;
    if( preg_match('/[^0-9]/', $password[0].$password[1] ) )
        return false;
    if( preg_match('/[^@|&]/', $password[2] )  )
        return false;
    if( preg_match('/[^A-Z]/', $password[3].$password[4].$password[5].$password[6] )  )
        return false;
    
    return true;
}

echo username( "Arkademy" );
echo password( "29@PASS" );
