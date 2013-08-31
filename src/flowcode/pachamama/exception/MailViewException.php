<?php

namespace flowcode\pachamama\exception;

/**
 * Description of MailViewException
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
class MailViewException extends Exception {

    // Redefine the exception so message isn't optional
    public function __construct($viewName, $code = 0, Exception $previous = null) {
        // some code
        // make sure everything is assigned properly
        parent::__construct("View " . $viewName . " not found.", $code, $previous);
    }

    // custom string representation of object
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

}

?>
