<?php

require_once 'index.php';
require_once 'livre.php';

class Auteur
{
    private $_nom;
    private $_prenom;
    private $_livres;

    public function __construct($nom, $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = [];
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getLivres()
    {
        $this->_livres;
    }

    public function ajouterLivres(Livre $livres)
    {
        $this->_livres[] = $livres;
        // array_push($this->_livres, $livres);
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function afficherL()
    {
        echo "Les livres de $this sont :<br/><ul>";
        foreach ($this->_livres as $livre) {
            echo "<li>$livre</li>";
        }
        echo '</ul>';
    }

    public function setLivres($livres)
    {
        $this->_livres;
    }

    public function __toString()
    {
        return $this->_prenom.' '.$this->_nom.'';
    }
}
