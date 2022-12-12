<?php

class GestioneCarrieraStudente {
    // Properties
    private $data_path;

    public function __construct($data_path) {
        $this->data_path = $data_path;
    }

    // Methods
    public function restituisciAnagraficaStudente($matricola) {
        $string = file_get_contents($this->data_path . "data/anagrafica_studenti.json");
        $json_string = json_decode($string, true);
        #echo var_dump($json_string['Entries']['Entry']);
    }

    public function restituisciCarrieraStudente($matricola) {
        $string = file_get_contents($this->data_path . "data/carriera_studenti.json");
        $json_string = json_decode($string, true);
    }
}


$gestoreCarriere = new GestioneCarrieraStudente('./');
$gestoreCarriere->restituisciAnagraficaStudente(123456);
?>
