# Laboratorio 0
In questo laboratorio faremo un recap sull'ingegneria del software. Daremo la definizione di paradigma MVC.

# Teoria


## Le P del programmatore
- **P**rima
- **P**ensa
- **P**oi
- **P**rogramma
- **P**erchè
- **P**rogrammi
- **P**oco
- **P**ensati
- **P**ossono 
- **P**ortare
- **P**arecchi
- **P**roblemi


## Criteri di qualità del codice

### Nomenclatura
Uno dei problemi più comuni degli sviluppatori è quello dei nomi. A volte passiamo più tempo a leggere il codice che a scriverlo, quindi una buona denominazione ripaga sempre in futuro. L'uso di buoni nomi rende il codice migliore e più pulito. Aiuta a identificare intuitivamente le responsabilità di ciascuna parte del codice. Rende la vostra applicazione facilmente leggibile in futuro da altri sviluppatori. La notazione ``snake_case`` utilizza parole in minuscolo separate da trattini bassi _. Questo è il formato suggerito, poiché i trattini bassi facilitano la lettura della variabile e non aggiungono troppo alla lunghezza del nome della variabile. Questa notazione viene utilizzata generalmente per nominare le variabili.
La notazione ``camelCase`` o ``CamelCase`` utilizza la prima lettera maiuscola delle parole nel nome di una variabile per facilitarne la lettura. 
Una buona pratica è usare la notazione a camello con la prima lettera maiuscola per dichiarare classi o interfacce, mentre con la minuscola per dichiarare funzioni e metodi.

### Responsabilità delle classi 
I sistemi software robusti dovrebbero essere costruiti a partire da una rete di oggetti interconnessi le cui responsabilità sono strette e ben coese, riducendosi all'esecuzione di pochi compiti ristretti e ben definiti. Tuttavia, è abbastanza difficile progettare sistemi di questo tipo, almeno in prima battuta. Il più delle volte tendiamo a raggruppare i compiti in questione seguendo un senso semantico. Una delle conseguenze più note di questo processo associativo razionale è che, a un certo punto, finiamo per creare classi che fanno troppo, le cosiddette classi onnipotenti. Come si può progettare classi le cui responsabilità siano coese? Anche quando non c'è una risposta diretta alla domanda, è possibile aderire in generale alle regole del Principio della Responsabilità Unica, la cui definizione formale afferma quanto segue: Non dovrebbe mai esserci più di una ragione per cui una classe debba cambiare. L'idea è che le classi devono sempre essere progettate per esporre una sola area di competenza e l'insieme delle operazioni che definiscono e implementano deve essere finalizzato a soddisfare questa competenza e nient'altro. 

### lunghezza delle funzioni


## Paradigma MVC

![drawing](../img/mvc_paradigm.PNG)


&nbsp;



## Struttura di un progetto MVC
```
./
├───index.php
├───css/
├───js/
├───lib/
├───utils/
└───src/
    ├───controllers/
    ├───models/
    └───views/
```


### Modello (dati)
Il modello (model) è il componente centrale del paradigma MVC. È la struttura dinamica dei dati dell'applicazione, indipendente dall'interfaccia utente. Il modello ha il compito di gestire semplicemente i dati. Che i dati provengano da un database, da un'API o da un oggetto JSON, il modello è responsabile della loro gestione.

### Vista (UI)
Una vista (view) è una qualsiasi rappresentazione delle informazioni, come un grafico, un diagramma o una tabella. Sono possibili più visualizzazioni delle stesse informazioni, come ad esempio un grafico a barre per il management e una visualizzazione tabellare per i contabili.

### Controllore (cervello)
Il codice del controllore (controller) funge da collegamento tra il modello e la vista, ricevendo gli input dell'utente e decidendo come gestire tali input. 


## Service classes
La logica di business o logica di dominio è quella parte del programma che codifica le regole di business del mondo reale che determinano come i dati possono essere creati. Tale logica è incorporata nelle classi di servizio.


### Struttura del progetto

*"Un posto per ogni cosa, ogni cosa al suo posto"*

* ``./``, root del progetto
* ``index.php``, rappresenta l'entry point della nostra applicazione
* ``css/``, cartella dove inseriremo i fogli di stile (file .css)
* ``js/``, cartella dove inseriremo il codice javascript (file .js)
* ``utils/``, cartella dove inseriremo le classi php con cui sviluppiamo la logica di business
* ``src/``, cartella dove contenente 3 sottocartelle, in cui svilupperemo il paradigma MVC:
    * ``models/``
    * ``views/``
    * ``controller/``


&nbsp;
# Pratica
Esercizio somma tra due numeri: crea una vista con un form, aggiungi le rotte, aggiungi un controller che gestisca le richieste, aggiungi una classe di servizio che risolva il calcolo


