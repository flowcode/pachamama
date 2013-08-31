<?php

namespace flowcode\pachamama\domain;

/**
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
interface IMailMessage {

    public function getTo();

    public function getFrom();

    public function getBody();

    public function getHeaders();

    public function getSubject();
}

?>
