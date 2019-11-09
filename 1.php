<?php


function get_biodata( $name, $age )
{
    $bio = array(
        "name" => $name,
        "age" => $age ,
        "address" => "jln. Mutiara no 8",
        "hobbies" => array("coding", "music"),
        "is_married" => false,
        "list_school" => array(
            array( "name" => "SDN 12 Kendari", "year_in" => "2005", "year_out" => "2010", "major" => null ),
            array( "name" => "SMP 6 Kendari", "year_in" => "2010", "year_out" => "2013", "major" => null ),
            array( "name" => "SMA 3 Kendari", "year_in" => "2013", "year_out" => "2016", "major" => null ),
            array( "name" => "Halu Oleo university", "year_in" => "2016", "year_out" => "2020", "major" => null )
            ),
        "skills" => array(
            array( "name" => "HTML", "level" => "advanced" ),
            array( "name" => "JS", "level" => "advanced" ),
            array( "name" => "KOTLIN", "level" => "advanced" ),
            array( "name" => "JAVA", "level" => "advanced" ),
            array( "name" => "PHP", "level" => "advanced" ),
            array( "name" => "C++", "level" => "beginner" ),
            ),
        "interest_in_coding" => true
    );
    return json_encode( $bio );
}

echo get_biodata( "alan", 21 );