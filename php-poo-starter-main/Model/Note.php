<?php

namespace Model;

class Note
{
    // Propriétés
    private int $id;
    private string $titre;
    private string $description;
    private string $contenu;
    private \DateTime $cree_le;
    private \DateTime $modifie_le;
    private int $auteur;
    private int $categorie;

    // Méthodes Getters/Setters


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of contenu
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get the value of cree_le
     */ 
    public function getCree_le()
    {
        return $this->cree_le;
    }

    /**
     * Set the value of cree_le
     *
     * @return  self
     */ 
    public function setCree_le($cree_le)
    {
        $this->cree_le = $cree_le;

        return $this;
    }

    /**
     * Get the value of modifie_le
     */ 
    public function getModifie_le()
    {
        return $this->modifie_le;
    }

    /**
     * Set the value of modifie_le
     *
     * @return  self
     */ 
    public function setModifie_le($modifie_le)
    {
        $this->modifie_le = $modifie_le;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of categorie
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }
}
// Ne rien écrire après cette accolade