<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comments
 *
 * @author tal
 */
class User {
    
    public $user;
    public $avatar;
    public $age;
    public $bio;
    public $mail;
    public $password;
    
    public function __construct($user, $avatar, $age, $bio, $mail, $password) {
        $this->user = $user;
        $this->avatar = $avatar;
        $this->age = $age;
        $this->bio = $bio;
        $this->mail = $mail;
        $this->password = $password;
    }

    
    
    
}
