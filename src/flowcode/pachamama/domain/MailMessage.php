<?php

namespace flowcode\pachamama\domain;

/**
 * Description of Mail
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
class MailMessage implements IMailMessage {

    private $to;
    private $from;
    private $fromName;
    private $body;
    private $headers;
    private $subject;
    private $attachments;

    /**
     * Construct a mail instance.
     * @param type $to
     * @param type $from
     * @param type $body
     * @param type $subject
     */
    public function __construct($to = null, $from = null, $body = null, $subject = null) {
        $this->to = $to;
        $this->from = $from;
        $this->body = $body;
        $this->subject = $subject;
    }

    /**
     * Get Html Mail with a view.
     * @param type $mailView
     * @param type $params
     * @param type $to
     * @param type $from
     * @param type $subject
     * @return \flowcode\pachamama\domain\Mail
     * @throws MailViewException
     */
    public static function getHtmlMail($mailView, $params, $to, $from, $subject) {
        if (file_exists($mailView)) {
            ob_start();
            require_once $mailView;
            $body = ob_get_contents();
            ob_end_clean();
        } else {
            throw new MailViewException($mailView);
        }

        $mail = new MailMessage($to, $from, $body, $subject);
        return $mail;
    }

    /**
     * Gat a standard plain mail.
     * @param type $to
     * @param type $from
     * @param type $body
     * @param type $subject
     * @return \flowcode\pachamama\domain\Mail
     */
    public static function getPlainMail($to, $from, $body, $subject) {
        $mail = new MailMessage($to, $from, $body, $subject);
        return $mail;
    }

    public function getTo() {
        return $this->to;
    }

    public function setTo($to) {
        $this->to = $to;
    }

    public function getFrom() {
        return $this->from;
    }

    public function setFrom($from) {
        $this->from = $from;
    }

    public function getFromName() {
        return $this->fromName;
    }

    public function setFromName($fromName) {
        $this->fromName = $fromName;
    }

    public function getBody() {
        return $this->body;
    }

    public function setBody($body) {
        $this->body = $body;
    }

    public function getHeaders() {
        return $this->headers;
    }

    public function setHeaders($headers) {
        $this->headers = $headers;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function getAttachments() {
        return $this->attachments;
    }

    public function setAttachments($attachments) {
        $this->attachments = $attachments;
    }

}

?>
