<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../lib/PHPMailer/src/Exception.php';
require '../../lib/PHPMailer/src/PHPMailer.php';
require '../../lib/PHPMailer/src/SMTP.php';

class MailManager
{
    
    function __construct() 
    {
        $this->messaggio = new PHPmailer();
        $this->messaggio->IsSMTP();
        $this->messaggio->Host = "mixer.unipi.it";
        $this->messaggio->SMTPSecure = "tls";
        $this->messaggio->SMTPAuth = false;
        $this->messaggio->Port = 25;
    }

    public function send_mail($param)
    {
        $this->messaggio->From='no-reply-laureandosi@ing.unipi.it';
        $this->messaggio->AddAddress($param['mail_address']);
        $this->messaggio->Subject='Prova.';
        $this->messaggio->Body=stripslashes($param['mail_text']);
        $ret = $this->messaggio->Send();
        $this->messaggio->SmtpClose();
        unset($this->messaggio);
        return $ret;
    }
    
}


?>
