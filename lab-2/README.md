# Laboratorio 2
In questo laboratorio studieremo come generare file PDF in PHP

## Teoria

Il formato PDF è uno standard per la distribuzione di documenti multipiattaforma. La sua diffusione è dovuta:
* alle specifiche gratuite e universalmente disponibili
* al fatto che i file mantengono lo stesso aspetto sui ogni schermo o stampante 
* al fatto che i documenti risultano piuttosto compatti.

In questa lezione vedremo come creare file PDF dinamici con PHP, sfruttando la [libreria fpdf](http://www.fpdf.org/). fpdf è una delle librerie PHP più diffusa per la generazione di PDF lato server. Questa libreria dispone di numerose funzionalità, dall'aggiunta di una pagina PDF alla creazione di griglie e altro ancora.



### Panoramica della libreria FPDF

Per prima cosa è necessario scaricare manualmente la libreria dal [sito ufficiale](http://www.fpdf.org/en/download.php) o tramite un gestore di packages.
Il file zip scaricato deve essere decompresso e copiato all'interno del nostro progetto (cartella lib/).

Dopo aver copiato la libreria all'interno del nostro progetto, la importiamo all'interno del file in cui abbiamo intenzione di usarla.
```php
require('fpdf.php');
```

Dopo aver incluso il file della libreria, instanziamo un oggetto chiave della libreria: FPDF. Il costruttore viene utilizzato senza specificare nessun parametro; in generale è possibile specificare alcuni argomenti come il formato delle pagine, l'unità di misura, ecc.
```php
$pdf = new FPDF();
```

Al momento abbiamo un oggetto FPDF che non contiene nessuna pagina, quindi dobbiamo aggiungerne una con la funzione ``AddPage()``. 
```php
$pdf->AddPage();
```

Prima di poter stampare il testo, è obbligatorio selezionare un carattere con SetFont(). Scegliamo, ad esempio, Arial bold 16. La libreria permette anche di specificare il corsivo con ``I``, il sottolineato con ``U`` o un carattere normale con una stringa vuota (o qualsiasi combinazione). 
```php
$pdf->SetFont('Arial','B',16);
```

Possiamo stampare una cella con la funzione Cell(). Una cella è un'area rettangolare, eventualmente incorniciata, che contiene una riga di testo. Viene emessa nella posizione corrente. Si specificano:
* le sue dimensioni
* il testo (centrato o allineato)
* se devono essere disegnati dei bordi
* dove si sposta la posizione corrente dopo di essa (a destra, sotto o all'inizio della riga successiva)
```php
$pdf->Cell(40,10,'Hello World !',1);
```
Infine, il documento viene chiuso e inviato al client (browser) tramite la funzione ``Output()``. Inoltre è possibile salvare il risultato in un file passando i parametri appropriati. 
```php
$pdf->Output();
```

Codice riassuntivo
```php
<?php 

require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World !',1);
$pdf->Output();

?>
```


## Pratica

Sviluppare un progetto MVC in php. All'avvio dell'applicazione si apre un form contenente un campo di testo; al submit del form deve essere generato un file pdf tramite la libreria fpdf contenente la stringa inserita nel campo di testo del form.