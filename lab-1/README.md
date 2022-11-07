# Laboratorio 1
In questo laboratorio studieremo come automatizzare l'invio di mail in PHP

## Teoria
Una funzionalità che spesso viene implementato all'interno del backend delle applicazioni web è l'invio automatico di messaggi di posta elettronica; questo è possibile grazie a un agente di trasferimento di messaggi (mail transfer agent MTA). Nell'ambito del sistema di posta elettronica su Internet, un MTA è un software che trasferisce messaggi di posta elettronica da un computer a un altro utilizzando il protocollo Simple Mail Transfer Protocol (SMTP). 
SMTP è un protocollo di comunicazione standard di Internet per la trasmissione di posta elettronica. I server di posta e altri agenti di trasferimento dei messaggi utilizzano SMTP per inviare e ricevere messaggi di posta. I client di posta elettronica a livello utente utilizzano SMTP solo per l'invio di messaggi a un server di posta (di solito sulla porta 587 o 465). Mentre i server SMTP utilizzano comunemente il Transmission Control Protocol sulla porta 25 (per il testo in chiaro) e 587 (per le comunicazioni crittografate).
La versione del protocollo oggi in uso comune ha una struttura estensibile con varie estensioni per l'autenticazione, la crittografia, il trasferimento di dati binari e gli indirizzi e-mail internazionalizzati.  

Noi vorremmo un'astrazione di quanto presentato fino ad ora e vorremmo lavorare a livello applicazione, ignari dell'implementazione a basso livello di protocolli, server ecc.
Due, tra le soluzioni più diffuse che ci forniscono un'interfaccia semplice per l'invio di mail in PHP, sono la funzione [mail()](https://www.php.net/manual/en/function.mail.php) integrata direttamente da PHP o la libreria [PHPMailer](https://github.com/PHPMailer/PHPMailer).

![drawing](../img/mail_meme.jpg)

In questo laboratorio studieremo la libreria PHPMailer.


### Funzione mail()
**Vantaggi**: preinstallato e pronto all'uso, tutto ciò che serve è avere PHP;  compatibile con le versioni precedenti, in modo che un cambio di versione di PHP non comprometta lo script; ha una curva di apprendimento bassa.

**Svantaggi**: difficile da configurare con SMTP, che innesca i filtri SPAM del destinatario; non permette di allegare documenti; non è adatta a grandi volumi di e-mail, poiché apre e chiude una connessione socket Simple Mail Transfer Protocol (SMTP) con ogni e-mail.

### Libreria PHPMailer
**Vantaggi**: introduce strutture complesse per le e-mail, come documenti HTML e allegati.; supporta SMTP e l'autenticazione è integrata su SSL e TLS; può essere usato per inviare grandi quantità di email in un breve periodo di tempo.

**Svantaggi**: richiede l'installazione (manuale o con composer); curva di apprendimento più ripida


### Panoramica della libreria PHPMailer
Specifichiamo il namespace da usare e importiamo alcuni file della libreria PHPMailer. L'installazione di questa libreria può essere fatta tramite composer o manualmente; nel nostro caso la libreira è già presente all'interno di del pacchetto di sviluppo.
```php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../assets/PHPMailer/src/Exception.php';
require '../assets/PHPMailer/src/PHPMailer.php';
require '../assets/PHPMailer/src/SMTP.php';
```



Instanziamo un oggetto ``PHPMailer``
```php
$messaggio = new PHPmailer();
```

Implementiamo un SMTP esterno
```php
$messaggio->IsSMTP();
$messaggio->Host = "********";
$messaggio->SMTPSecure = "tls";
$messaggio->SMTPAuth = false;
$messaggio->Port = 25;
```

Definiamo le intestazioni e il corpo del messaggio
```php
$messaggio->From='no-reply-laureandosi@ing.unipi.it';
$messaggio->AddAddress('address_of_mail_recipient@unipi.it');
$messaggio->Subject='subject_text';
$messaggio->Body=stripslashes('messagge_text');
```

Inviamo del messaggio
```php
$messaggio->Send()
```

Chiudiamo la connessione
```php
$messaggio->SmtpClose();
unset($messaggio);
```


Codice riassuntivo
```php
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../lib/PHPMailer/src/Exception.php';
require '../../lib/PHPMailer/src/PHPMailer.php';
require '../../lib/PHPMailer/src/SMTP.php';


$messaggio = new PHPmailer();
$messaggio->IsSMTP();
$messaggio->Host = "mixer.unipi.it";
$messaggio->SMTPSecure = "tls";
$messaggio->SMTPAuth = false;
$messaggio->Port = 25;

$messaggio->From='no-reply-laureandosi@ing.unipi.it';
$messaggio->AddAddress('address_of_mail_recipient@unipi.it');
$messaggio->Subject='subject_text';
$messaggio->Body=stripslashes('Hello world!');

if(!$messaggio->Send()){ 
  echo $messaggio->ErrorInfo; 
}else{ 
  echo 'Email inviata correttamente!';
}

$messaggio->SmtpClose();
unset($messaggio);

?>
```


## Pratica

Esercizio invio mail tramite PHP: crea un form contenente 3 campi: nome, indirizzo mail del destinatario e testo. Aggiungi un controller che gestisca l'invio di mail, quando viene fatto il submit del form invia una mail all'indirizzo del destinatario contenente il testo specificato nel form.
