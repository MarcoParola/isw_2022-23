<?php 


require '../../utils/MailManager.php';

class MailController
{
    public static function mail_handler($param)
    {
        $mail_manager = new MailManager();
        $mail_sent = $mail_manager->send_mail($param);
        $mail_sent = $mail_sent ? 'true' : 'false';
        echo $mail_sent;
        header('Location: ../views/mailSent.html?sent=' . $mail_sent);
    }
}

//echo var_dump($_POST);
MailController::mail_handler($_POST);



?>
