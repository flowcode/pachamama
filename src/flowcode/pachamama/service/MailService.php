<?php

namespace flowcode\pachamama\service;

use Exception;
use flowcode\pachamama\domain\IMailMessage;

/**
 * Description of MailerService
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
class MailService {

    /**
     * Send an email.
     * @param IMailMessage $mail
     * @return boolean
     */
    public static function send(IMailMessage $mail) {
        $success = TRUE;
        try {
            mail($mail->getTo(), $mail->getSubject(), $mail->getBody(), $mail->getHeaders());
        } catch (Exception $exc) {
            $success = FALSE;
        }
        return $success;
    }

}

?>
