<?php

/**
 * Description of MailerService
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
class MailService {

    /**
     * Send an html mail.
     * @param type $toMail
     * @param type $subject
     * @param type $params
     * @param type $templatePath
     * @return boolean.
     */
    function sendHtmlMail($toMail, $subject, $params, $templatePath) {
        if (file_exists($templatePath)) {
            ob_start();
            require_once $templatePath;
            $body = ob_get_contents();
            ob_end_clean();
        }
        $headers = "MIME-Version: 1.0\r\n"
                . "Content-Type: text/html; charset=utf-8\r\n"
                . "Content-Transfer-Encoding: 8bit\r\n"
                . "From: =?UTF-8?B?" . base64_encode($params["from_name"]) . "?= <" . $params["from_mail"] . ">\r\n"
                . "X-Mailer: PHP/" . phpversion();

        return mail($toMail, $subject, $body, $headers);
    }

    /**
     * Send a plain mail.
     * @param type $toMail
     * @param type $fromMail
     * @param type $message
     * @param type $subject
     * @return boolean success.
     */
    function sendPlainMail($toMail, $fromMail, $message, $subject) {
        $headers = 'From: ' . $fromMail . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
        return mail($toMail, $subject, $message, $headers);
    }

}

?>
