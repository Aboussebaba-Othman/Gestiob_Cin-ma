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

    public function ajouterFilm(&$films) {
        $films[] = [
            'id' => $this->id,
            'titre' => $this->titre,
            'genre' => $this->genre,
            'duree' => $this->duree,
            'dateSortie' => $this->dateSortie,
            'realisateur' => $this->realisateur,
        ];
    }

    public function modifierFilm(&$films) {
        foreach ($films as &$film) {
            if ($film['id'] === $this->id) {
                $film['titre'] = $this->titre;
                $film['genre'] = $this->genre;
                $film['duree'] = $this->duree;
                $film['dateSortie'] = $this->dateSortie;
                $film['realisateur'] = $this->realisateur;
                return;
            }
        }
        echo "Film introuvable.\n";
    }

    public function supprimerFilm(&$films) {
        foreach ($films as $index => $film) {
            if ($film['id'] === $this->id) {
                unset($films[$index]);
                return;
            }
        }
        echo "Film introuvable.\n";
    }
}

$films = [];

$film1 = new Film(1, "Avatar", "Science-fiction", 162, "2009-12-18", "James Cameron");
$film1->ajouterFilm($films);

$film2 = new Film(1, "Avatar: The Way of Water", "Science-fiction", 192, "2022-12-16", "James Cameron");
$film2->modifierFilm($films);

print_r($films);
?>
