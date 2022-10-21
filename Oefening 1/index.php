<?php

/**
 * Je kan een variable gebruiken om data in op te slaan
 * in $variable zit een stuk tekst dat zegt dat het een variable is
 * dit gebeurt op de volgende manier
 *
 * op het moment dat je een tekst gebruikt tussen quotes dan noemen we dit een string
 */

$variable = "dit is een variable <br>";

echo $variable;

/**
 * Je kan ook cijfers in een variable zetten
 * deze kan je gebruiken voor bijvoorbeeld een berekening te maken
 * in $cijfer1 zit het cijfer 1
 * in $cijfer2 zit het cijfer 2
 * samen maakt dit 3
 *
 * op het moment dat we een cijfer gebruiken zonder quotes dan noemen we dit een integer
 */

$cijfer1 = 1;
$cijfer2 = 2;

echo $cijfer1 . "+" . $cijfer2 = $cijfer1+$cijfer2;

/**
 * een variable kan ook een array zijn
 * een array is een rij aan data die geordent word geplaatst
 * om een array te kunnen tonen kunnen we niet gewoon een echo gebruiken maar wel print_r of een var_dump
 */

echo "<br />Dit is een array:<br />";

$array = ['Tom', 'Kim', 'Sam'];

//print_r is een functie later laat ik je zien hoe jij je eigen functie kan maken
print_r($array);


/**
 * Om wel een echo te kunnen gebruiken kunnen we er doorheen lopen
 * een loop klinkt heel ingewikkeld maar is het niet
 * in de foreach zeg je eigenlijk voor elk item die in array zit wil ik dat je dat item als de variable name zet
 */

foreach($array as $name) {
    echo "<br>" . $name;
}

/**
 * je zou ook nog het item in de array direct kunnen aanroepen dit doe je op de volgende manier
 * hier wordt het eerste item uit de array gehaald
 * je zou nou wel denken 1ste? maar hij staat op 0! klopt arrays beginnen altijd met 0
 */

echo "<br>dit is het eerste item van de array: " . $array[0];

/**
 * OPDRACHT
 * Maak 4 variablen met een naam er in
 * plaats deze 4 variable vervolgens in de array
 * en loop vervolgens door deze array heen zodat alle namen op de pagina worden getoont
 */

$naam1 = "tess";
$naam2 = "michel";
$naam3 = "tom";
$naam4 = "kelly";

$namen = [$naam1, $naam2, $naam3, $naam4];

foreach($namen as $naam) {
    echo '<br>' . $naam;
}