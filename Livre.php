<?php

require_once 'auteur.php';

// Les livres  sont  caractérisés  par  un  titre,  un  nombre  de  pages,  une  année  de  parution,  un  prix  et  un auteur.

class Livre
{
    private $_titre;
    private $_pages;
    private $_parution;
    private $_prix;
    private $_auteur;

    public function __construct($titre, $pages, $parution, $prix, $auteur)
    {
        $this->_titre = $titre;
        $this->_pages = $pages;
        $this->_parution = $parution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $auteur->ajouterLivres($this);
    }

    public function getTitre()
    {
        return $this->_titre;
    }

    public function getPages()
    {
        return $this->_pages;
    }

    public function getParution()
    {
        return $this->_parution;
    }

    public function getPrix()
    {
        return $this->_prix;
    }

    public function getAuteur()
    {
        return $this->_auteur;
    }

    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    public function setPages($pages)
    {
        $this->_pages = $pages;
    }

    public function setParution($parution)
    {
        $this->_parution = $parution;
    }

    public function setPrix($prix)
    {
        $this->_prix = $prix;
    }

    public function setAuteur($auteur)
    {
        $this->_auteur = $auteur;
    }

    public function __toString()
    {
        return $this->_titre.' ('.$this->_parution.') -'.$this->_pages.'&nbsp; pages / '.$this->_prix.'€ <br>';
    }
}
