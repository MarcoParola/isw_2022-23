# Laboratorio 3
In questo laboratorio studieremo uno dei sistemi di gestione di contenuti più diffuso: [Wordpress](https://wordpress.com)

## Teoria
WordPress è un sistema di gestione di contenuti (content management system CMS) gratuito e open-source scritto in linguaggio preprocessore ipertestuale e basato su database relazionale MySQL o MariaDB con supporto HTTPS; è stato rilasciato per la prima volta il 27 maggio 2003 da due fondatori: Matt Mullenweg, sviluppatore americano, e Mike Little, sviluppatore britannico. Le sue caratteristiche includono un'architettura di plugin e un sistema di template, che all'interno di WordPress vengono chiamati theme/temi. WordPress è stato originariamente creato come sistema di pubblicazione di blog, ma si è evoluto per supportare altri tipi di contenuti Web, tra cui le mailing list e i forum più tradizionali di Internet, le gallerie multimediali, i siti associativi, i sistemi di gestione dell'apprendimento e i negozi online. 

Per funzionare, WordPress deve essere installato su un server Web, sia che faccia parte di un servizio di hosting Internet come WordPress.com, sia che si tratti di un computer che esegue il pacchetto software WordPress.org per fungere da host di rete a sé stante. Un computer locale può essere utilizzato per scopi di prova e di apprendimento da un singolo utente.

![drawing](./img/meme_wp.jpg)

## Installazione di Wordpress
Per poter eseguire WordPress è necessario avviare il database MySQL e il server web Apache. Possiamo avviarli dal pannello di controllo di xampp che troviamo su ``C:\isw\xampp-controll``

Dopo aver scaricato il pacchetto dal sito del corso, decomprimere in ``C:\isw\projects\``

Le parti di un sito web WordPress sono due: 
- database
- backend 

### Database

Per crearne uno per il vostro sito, visitate http://localhost/phpmyadmin.

In questo modo si accede a **PhpMyAdmin**, il pannello di gestione che aiuta a creare e gestire i database. Gran parte di questo strumento va oltre lo scopo di questa lezione, anche se è semplice creare un database. Creiamo il database che permetterà alla nostra instanza wp di essere eseguita

![drawing](./img/create_new_db_wp.PNG)

Dopo dobbiamo specificare il nome del database dove faremo il deployment. Assegnamo il nome ``db_isw`` alla nostra instanza Mysql.

![drawing](./img/name_db_wp.PNG)

In questo modo otteniamo un database MySql vuoto che il backend utilizzerà durante l'esecuzione.

### Backend
Scarichiamo il pacchetto wp dal sito del corso, decomprimiamolo in ``C:\isw\projects\``, rinominare il la cartella "wordpress-6.1-it_IT" in "deployment".

Collegarsi all'indirizzo http://localhost/final_project/ e seguire gli step guidati per l'installazione. Valorizzare come riportato di seguito i campi del form a cui saremo reindirizzati (quelli non specificati possono essere lasciati vuoti o con il valore di default):
* Nome del database: db_isw (nome del database creato nei precedenti step)
* Nome utente del database: root

In questo modo specifichiamo a Wordpress il database a cui fare riderimento. I restanti campi possono essere lasciati vuoti/con i valori di default.

![drawing](./img/installation_wp.PNG)

Valorizzare come riportato di seguito i campi del form a cui saremo reindirizzati (quelli non specificati possono essere lasciati vuoti).
* Site Title: isw
* Username: admin
* Password: admin
* spuntare il flag: Conferma l'uso della password debole
* La tua mail: inserire un valore casuale es. pippo@unipi.it

Infine, effettuare il login con le credenziali admin, admin. In questo modo saremo reindirizzati sulla dashboard di Wordpress.
La dashboard di wp sarà accessibile all'indirizzo http://localhost/deployment/wp-admin. 

Wordpress ci permette di effettuare diverse operazioni dalla sua interfaccia di gestione:
* Aggiungere utenti e gestire i permessi di accesso
* Installare plugin
* Aggiungere contenuti
* Aggiungere pagine, permettendo l'editing tramite drug and drop

L'integrazione di un progetto plain php all'interno di un instanza wordpress può essere effettuata definendo un nuovo template all'interno dei temi/themes wordpress. Nel nostro ambiente (root del progetto wordpress), troviamo la cartella al percorso
```
wp-content\themes\twentytwentythree\templates
```

Definire un nuovo template, significa creare un nuovo file php all'interno della cartella sopra riportata, contenente la seguente intestazione:

```php
<?php
/**

 * Template Name: templatename

 */

?>
```
Potremmo definire un template di pagina per verificare la corretta integrazione del nostro codice PHP all'interno dell'instanza wp.
Creiamo un nuovo file in cui copiamo il seguente contenuto e salviamolo in un file chiamato ``test_template.php``

```html
<?php
/**

 * Template Name: test_template

 */
?>
<!DOCTYPE html>
<html>
    <body>

        <h1>ISW</h1>
        <p>testing new template</p>

    </body>
</html> 
```
Per verificare il corretto funzionamento dell'integrazione, accediamo al pannello di controllo di wp e creiamo una nuova pagina.
Si aprirà l'editor grafico della pagina in cui dovremmo selezionare il template della pagina che stiamo creando. Nel menù laterale selezioniamo il template che abbiamo appena creato tra quelli disponibili.

![drawing](./img/template.gif)

Dopo aver dato un titolo alla pagina, possiamo pubblicarla e visualizzare il risultato.

Infine integriamo una classe PHP di esempio all'interno del template.
Per prima cosa creiamo la classe PHP e salviamola in un file ``Test.php`` all'interno del nostro progetto (per semplicità salviamo il file nella stessa locazione dove abbiamo salvato il template).
```php
<?php 

class Test{
    public function say_hello(){
        echo "ciao";
    }
}

?>
```

Adesso, modifichiamo il file ``test_template.php`` includendo la classe appena creata.
```html
<?php
/**

 * Template Name: test_template

 */

require "Test.php";
?>

<!DOCTYPE html>
<html>
    <body>

        <h1>ISW</h1>
        <p>testing new template</p>
        <?php 
            $test = new Test();
            $test->say_hello();
        ?>

    </body>
</html> 
```

Ricaricando la pagina, possiamo visualizzare il risultato.
