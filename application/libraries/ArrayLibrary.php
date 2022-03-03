<?php
class ArrayLibrary
{
    function __construct() {

    }
/**
 * vytvoří asociativní pole s klíči podle parametru $pole, hodnoty budou prázdné
 */
    function createBlankArray($pole) {
        $result = array();
        foreach($pole as $row) {
            $result[$row] = '';
        }

        return $result;
    }
/**
 * vytvoří pole se všemi prvky formuláře a kde bude error message, tak ji vypíše, jinak prázdný řetezec
 */
    function inputsArray($error, $inputs) {
        $result = $this->createBlankArray($inputs);
        foreach($error as $key => $row) {
            $result[$key] = $row;
        }

        return $result;
    }


}