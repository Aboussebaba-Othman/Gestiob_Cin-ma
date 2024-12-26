<?php
class Film {
    private $id;
    private $titre;
    private $genre;
    private $duree;
    private $dateSortie;
    private $realisateur;

    public function __construct($id, $titre, $genre, $duree, $dateSortie, $realisateur) {
        $this->id = $id;
        $this->titre = $titre;
        $this->genre = $genre;
        $this->duree = $duree;
        $this->dateSortie = $dateSortie;
        $this->realisateur = $realisateur;
    }

    public function ajouterFilm() {}

    public function modifierFilm() {}

    public function supprimerFilm() {}
}
?>