<?php

class Animal {}
class Perro extends Animal {}
class Casa {}

function respira(Animal $a) {
    echo "Respirando...\n" ;
}


respira(new Animal);  // ok
respira(new Perro);   // ok
respira(new Casa);    // error
