<?php

class User
{
    private int $id;
    private string $nom;
    private string $email;
    private string $mot_de_passe;

    public function __construct(int $id, string $nom, string $email, string $mot_de_passe)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->mot_de_passe = $mot_de_passe;
    }

    public function getId(): int
    
    {
        return $this->id;
    }


    public function getNom(): string
    {
        return $this->nom;
    }


    public function getEmail(): string
    {
        return $this->email;
    }


    public function getMotDePasse(): string
    {
        return $this->mot_de_passe;
    }


    public function afficherInformations()
    {
        echo "ID: {$this->id}"."<br>";
        echo "Nom: {$this->nom}"."<br>";
        echo "Email: {$this->email}"."<br>";
        echo "Mot de passe: {$this->mot_de_passe}";
    }
}
$zero = new User(1,"othman","othman@gmail.com",12345);
$zero->afficherInformations();

?>
