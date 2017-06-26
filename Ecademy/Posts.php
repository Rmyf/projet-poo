<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Posts
 *
 * @author tal
 */
class Posts {
    
    public $categorie;
    public $titre;
    public $contenu;
    public $votes;
    public $date;
    public $auteur;
    
    public function __construct($categorie, $titre, $contenu, $votes, $date, $auteur) {
        $this->categorie = $categorie;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->votes = $votes;
        $this->date = $date;
        $this->auteur = $auteur;
    }

        //put your code here
}
