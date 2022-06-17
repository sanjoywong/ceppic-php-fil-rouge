<?php

class Email{

public string $toEmail;
public string $fromEmail;
public string $sujetEmail;
public string $messageEmail;

public function __construct($toEmail,$fromEmail,$sujetEmail,$messageEmail)
{
    $this->toEmail = $toEmail;
    $this->fromEmail = $fromEmail;
    $this->sujetEmail = $sujetEmail;
    $this->messageEmail = $messageEmail;

    $headers = 'From:'.$fromEmail.''."\r\n".'Reply-To'.$fromEmail."\r\n".'X-mailer:PHP/'.phpversion();

    mail($toEmail,$sujetEmail,$messageEmail,$headers);
}



}




?>