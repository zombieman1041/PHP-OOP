<?php
//example 1
class ulises{
public $firstName;
public $lastName;
public $breed;
function __construct($title, $firstName, $lastName, $breed) {
$this­>firstName = $firstName;
$this­>lastName = $lastName;
$this­>breed = $breed;
}
function getName() {
return "{$this­>firstName}" .
“{$this­>lastName}”;
}
}

class andersenpai {
public $firstName;
public $lastName;
public $breed;
function __construct($title, $firstName, $lastName, $breed) {
$this­>firstName = $firstName;
$this­>lastName = $lastName;
$this­>breed = $breed;
}
function getName() {
return "{$this­>firstName}" .
"{$this­>lastName}";
}
}

class dimitri {
public $firstName;
public $lastName;
public $breed;
function __construct($title, $firstName, $lastName, $breed) {
$this­>firstName = $firstName;
$this­>lastName = $lastName;
$this­>breed = $breed;
}
function getName() {
	return "{$this­>firstName}" .
	"{$this­>lastName}";
	}
}

//example 2
$ulises1 = new ulises(“Anime”, “Otaku”, “EnglishBulldog”);
print “Ulises 1: {$ulises1­>getName()}\n;

$ulises1 = new andersenpai(“Anime”, “Otaku”, “SpanishBulldog”);
print “Andersenpai 1: {$andersenpai1­>getName()}\n;

$ulises1 = new ulises(“Anime”, “Otaku”, “AmericanBulldog”);
print “Dimitri 1: {$dimitri1­>getName()}\n;
?>