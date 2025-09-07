<?php 

namespace Model;

class Categorie
{
    // Propriétés
    private int $id;
    private string $nom;
    private string $banniere;

    // Méthodes Getters/Setters

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of banniere
     */ 
    public function getBanniere()
    {
        return $this->banniere;
    }

    /**
     * Set the value of banniere
     *
     * @return  self
     */ 
    public function setBanniere($banniere)
    {
        $this->banniere = $banniere;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}
// Ne rien écrire après cette accolade