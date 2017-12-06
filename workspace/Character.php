<?php

//character class
class Character{ //class - noun
    
    //properties - adjective - variables and arrays
    public $img; //public is an access modifier. All other files can see and change this variable
    public $strength;
    public $name;
    public $role; //essentially a class...warlock, titan etc
    public $speed;
    public $health = 100;
    
    //methods - verbs - functions
    public function __construct(){
        //this is usually is every class
        // code that should run everytime I make a character object (think of it as an init function)
    }
    
    public function describeMe(){
        echo 'my name is '.$this->name; //$this - this class only. no dollar sign infront of properties
        // the above says the name of this class only
        echo 'I am a(n) '.$this->role;
        echo 'my current health is '.$this->health.'and my strength is at '.$this->strength;
    }
    
    public function makeSound(){
        echo 'sound';
    }
    
    public function move(){
        echo 'move';
    }
    
    public function attack(){
        echo 'attack';
    }
    
}

