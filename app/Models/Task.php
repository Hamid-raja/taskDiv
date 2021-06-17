<?php

namespace App\Models;


class Task
{

    public static function getArray(){
        return array('first', 'second', 'third','fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'nineth', 'ten','eleven', 'twelve', 'thirteen','fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen', 'twenty'); 
    }
    
    public static function split_array($arr)
    {        
        $chunks = array();
        $i = 1;

        while (count($arr)) {

            $chunks[] = array_splice($arr, 0, 3, array());
            $i++;
        }
        return $chunks;
    }

}
