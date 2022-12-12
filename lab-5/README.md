# Laboratorio 5
In questo laboratorio studieremo alcune classi php utili allo sviluppo del progetto finale.


## Teoria
La classe ``GestioneCarrieraStudente`` è una classe wrapper che simula il server Esse3 di ateneo che può essere interrogato per recuperare le informazioni relative alla componente studentesca e alle loro carriere. 

Per il corretto funzionamento, è importante passare il percorso della cartella ``data`` come parametro al costruttore. Tale cartella contiene informazioni utili alla logica della classe (potete ignorare il suo contenuto).

La classe GestioneCarrieraStudente contiene 2 metodi:
* public function restituisciAnagraficaStudente($matricola); data la matricola passata come parametro, restituisce un oggetto json che descrive l'anagrafica della matricola.
* public function restituisciCarrieraStudente($matricola); data la matricola passata come parametro, restituisce un oggetto json che descrive la carriera della matricola.
