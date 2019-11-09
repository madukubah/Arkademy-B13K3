<?php
function thirdHighest( $data )
{
    $sortedData = array();
    if( !is_array( $data ) ) return "Parameter should be an array!";
    if( count( $data ) < 3 ) return "Minimal array length is 3!";
    
    $sortedData[0] = $data[0];
    for( $i=1; $i< count( $data ); $i++ )
    {
        for( $j=0; $j< count( $sortedData ); $j++ )
        {
            if( $data[$i] > $sortedData[$j] )
            {
                $sortedData[$j] = $sortedData[$j] + $data[$i];
                $data[$i]       = $sortedData[$j] - $data[$i];
                $sortedData[$j] = $sortedData[$j] - $data[$i];
            }
        }
        $sortedData[$i] = $data[$i];
    }
    return $sortedData[2];
}

echo thirdHighest( [1, 2, 3, 4, 5, 6, 17, 8, 9, 12, 32, 43] );
