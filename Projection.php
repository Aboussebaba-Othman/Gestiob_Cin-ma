<?php
class Projection {
    private $id;
    private $date;
    private $heure;

    public function __construct($id, $date, $heure) {
        $this->id = $id;
        $this->date = $date;
        $this->heure = $heure;
    }

    public function ajouterProjection() {
    }

    public function modifierProjection() {
    }

    public function supprimerProjection() {
    }
}
?>