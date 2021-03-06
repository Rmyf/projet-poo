<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Point
 *
 * @author tal
 */
class Point {
    
    private $top ;
    private $left ;
    
    
    function __construct($top, $left) {
        $this->top = $top;
        $this->left = $left;
    }

    
    public function afficher(): string {
        $style = 'width: 2px;'.
                 'height:2px;'.
                 'background-color: black;'.
                 'position:absolute;'.
                 'top:' .$this->top . 'px;'.
                 'left:' .$this->left . 'px';
                
                
                return '<div style="' . $style .  '"></div>';          
                
        
    }
     public function distanceFrom(Point $point): float {
        return sqrt(pow($point->top-$this->top, 2) 
                + pow($point->left-$this->left, 2));
    
    }
}
