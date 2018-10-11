<?php

/**
 * Description of Acumular
 *
 * @author Josoé
 */
class Acumular {

    function acumular($var) {
        
        static $acumular;
        
        $acumular += $var;
        
        return $acumular;
        
    }
    
    
}
