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

### Nomi di file, classi, metodi e variabili

- lunghezza delle funzioni
- Responsabilità delle classi 
- Organizzazione della struttura del progetto


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



* ``index.php``, rappresenta l'entry point della nostra applicazione
* ``css/``, cartella dove inseriremo i fogli di stile (file .css)
* ``js/``, cartella dove inseriremo il codice javascript (file .js)
* ``lib/``, cartella dove inseriremo le librerie da includere nei nostri progetti
* ``utils/``, cartella dove inseriremo le classi php con cui sviluppiamo la logica di business
* ``src/``, cartella dove contenente 3 sottocartelle, in cui svilupperemo il paradigma MVC:
    * ``models/``
    * ``views/``
    * ``controller/``

*"Un posto per ogni cosa, ogni cosa al suo posto"*

**Cosa è la logica di business o logica di dominio? E qual è il posto giusto all'interno di un progetto?**
La logica di business o logica di dominio è quella parte del programma che codifica le regole di business del mondo reale che determinano come i dati possono essere creati, memorizzati e modificati. Essa prescrive il modo in cui gli oggetti di business interagiscono tra loro e impone i percorsi e i metodi con cui gli oggetti di business vengono acceduti e aggiornati. Tale logica è incorporata nelle classi di servizio. 

## Service classes
L'idea delle classi di servizio non è integrata nel framework o documentata nella documentazione ufficiale. Di conseguenza, le persone si riferiscono ad esse in modo diverso. 
Non essendo integrate all'interno di Laravel, non c'è un comando artisan make per creare una classe di servizio. Si possono tenere le classi dove si vuole. Una buona soluzione è mettere le nostre classi di servizio in ``app/Services``.


&nbsp;
# Pratica


