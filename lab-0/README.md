# Laboratorio 0
In questo laboratorio faremo un recap sull'ingegneria del software. Daremo la definizione di Framework e del paradigma MVC, analizzando il framework php Laravel e tutti i vantaggi che fornisce.

# Teoria


## Recap ingegneria del software

## Criteri di qualità del codice

- nomi di file, classi, metodi e variabili
- lunghezza delle funzioni
- Responsabilità delle classi 
- Organizzazione della struttura del progetto


## Concetto di framework
Un framework è un ambiente di sviluppo composto da un set di tool, che permette di sviluppare in modo più veloce un’applicazione non dovendo riscrivere parti di codice from scratch.

## Paradigma MVC

![drawing](../img/mvc_paradigm.PNG)


&nbsp;

## Framework Laravel


### Struttura del progetto

### Artisan e Artisan GUI
Artisan è l'interfaccia a linea di comando (CLI, Command Line Interface) di Laravel. Artisan CLI fornisce agli sviluppatori una serie di comandi utili da utilizzare durante lo sviluppo di un'applicazione Laravel. Alcune delle operazioni che possono essere svolte richiamando il comando 'artisan' sono la creazione di modelli, controller, regole di validazione, e la migrazione di dati. 

```
php artisan nome_comando
```

In questo corso non useremo artisan da linea di comando, bensì da un'interfaccia grafica fornita da Laravel [Artisan GUI](https://github.com/infureal/artisan-gui).
Laravel Artisan GUI è un package di Bakhtiyar Issakhmetov che consente di eseguire i comandi Artisan da un'interfaccia web. Di default, è possibile accedere a questa pagina solo nell'ambiente locale, visitando ``/~artisan`` nella propria applicazione. 
Comando per installare Artisan GUI all'interno di un progetto. (Nel nostro caso è già installato all'interno del pacchetto). 
```
composer require infureal/artisan-gui
```
Dopo aver avviato il server, è possibile accedere all'interfaccia al seguente indirizzo.
> http://localhost:8000/~artisan

### Database

## Creare ed eseguire un nuovo progetto in Laravel

## MVC in Laravel

### Rotte
``web.php``
```php
Route::method($uri, $callback);
```

### Model


### View in Laravel e sistema di template Blade

Le viste forniscono un modo conveniente per collocare tutto il nostro HTML in file separati; esse separano la logica del controller / logica dell'applicazione dalla presentazione. Sono memorizzate nella cartella ``resources/views``.

Laravel supporta viste definite in semplici file PHP (.php) e viste Blade (.blade.php), un moderno motore di template PHP di Laravel. Il riconoscimento dell'engine è automatico e basato su una convenzione a livello di estensione del file. Laravel favorisce l'utilizzo di Blade in quanto strumento più avanzato sia funzionalmente che sintatticamente rispetto ai classici file PHP.

```
@php
{{-- PHP code here --}}
@endphp
```

Le View Blade sono compilate in semplice codice PHP, e questo consente di scrivere PHP direttamente nella View, a differenza di molti altri template engine PHP. La compilazione avviene solo quando la vista Blade viene modificata, per poi essere messa in cache ed evitare overhead.
Inoltre nei template di Blade è possibile sfruttare l’ereditarietà tipica dei linguaggi orientati agli oggetti. Infatti possono essere definiti layout figli che ereditino ed estendano le funzionalità di layout padri.

### Controller

Invece di definire tutta la logica di gestione delle richieste come "closures" (funzioni inline) nei file delle rotte, si potrebbe voler organizzare questo comportamento usando classi ``Controller``. I controllori possono raggruppare la logica di gestione delle richieste in un'unica classe. Per esempio, una classe UserController potrebbe gestire tutte le richieste in entrata relative agli utenti, tra cui la visualizzazione, la creazione, l'aggiornamento e la cancellazione degli utenti. Di default, i controllori sono memorizzati nella cartella ``app/Http/Controllers``.
Il vantaggio di utilizzare le classi Controller consiste nella possibilità di riunire richieste correlate in un’unica classe, in modo da gestire  con un unico file, contenente la definizione della classe, le parti  comuni di un’applicazione.
```
Route::get( 'foo', function() { return ... ;});
Route::get( 'foo', 'FooController@function');
```

Per creare un controller dovremo ... 
Dopo la creazione del controller troveremo il file ``NomeController`` all'interno della cartella Controllers. Il suo contenuto apparirà come segue
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NomeController extends Controller
{
    //
}
```

&nbsp;
# Pratica


