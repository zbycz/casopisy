<?php
/**
 * Logger je trida, ktera umoznuje logovat problemy, ktere se vyskytnou pri 
 * volani SOAP.
 *
 * @author pridaros
 */

define("EERR", 0);
define("EMSG", 1);

class Logger {
    /**
     * Staticka metoda pro ulozeni kliticke hlasky k pozdejsimu zpracovani
     * Tyto message jsou zatim ukladany do pole $_REQUEST
     * 
     * Priklad pouziti: Logger::log("Hlaska",EERR)
     * 
     * @param string $message
     * @param int $level 
     */
    static function log($message, $level = 0){
        print($message);
        //$messages = $_REQUEST[MESSAGES];
        if(key_exists(MESSAGES, $_REQUEST) && is_array($var)){
            $tmp = $var[$level][] = $message;
        }else{
            $tmp = array($level => array($message));
        }
        $_REQUEST[MESSAGES] = $tmp;
    }
    
    /**
     * Metoda vraci asociativni pole ve tvaru:
     * array( cislo => array("messages"))
     * Tyto message jsou zatim ukladany do pole $_REQUEST
     * 
     * @return array
     */
    static function getMessages(){
        if(key_exists(MESSAGES, $_REQUEST)){
            return $_REQUEST[MESSAGES];
        }else{
            return array();
        }
    }
}

?>
