<?php

namespace Model;

class Utilisateur
{
    // Les propriétés de la classe (variables)
    private int $id;
    private string $nom;
    private string $email;
    private string $mot_de_passe;
    private string $photo;

    /**
     * Le constructeur permet d'instancier la classe 
     * avec des propriétés ou autre classe prédéfinie
     */
    public function __construct()
    {
        $this->photo = 'assets/img/user.png';
    }

    // Les méthodes de la classe (fonctions)
    public function getId(): string
    {
        return $this->id;
    }
    
    /**
     * Récupérer la valeur de : nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Muter la valeur de : nom
     * @return  self
     */ 
    public function setNom(string $nom): Utilisateur
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Récupérer la valeur de : email
     */ 
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Muter la valeur de : email
     *
     * @return  self
     */ 
    public function setEmail(string $email): Utilisateur
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Récupérer la valeur de : mot_de_passe
     */ 
    public function getMotDePasse(): string
    {
        return $this->mot_de_passe;
    }

    /**
     * Muter la valeur de : mot_de_passe
     *
     * @return  self
     */ 
    public function setMotDePasse(string $mot_de_passe): Utilisateur
    {
        $this->mot_de_passe = $mot_de_passe;

        return $this;
    }

    /**
     * Récupérer la valeur de : dateInscription
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * Muter la valeur de : photo
     * @return  self
     */
    public function setPhoto(string $photo): Utilisateur
    {
        $this->photo = $photo;

        return $this;
    }
}
// Ne rien écrire après cette accolade