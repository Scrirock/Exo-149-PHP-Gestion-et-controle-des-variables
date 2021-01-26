<?php

// En utilisant toutes les fonctions que nous venons de voir.

/**
 * 1. Vérifiez si cette variable est vide, si c'est le cas, affichez vide si non affichez pas vide.
 */
$var = 0;
// TODO votre code ici.

if (empty($var))echo "vide<br>";
else echo "pas vide<br>";

/**
 * 2. Détruisez la variable déclarée, tentez de l'afficher ensuite en utilisant un print_r.
 */
$eraseMe = "Please erase me !";
// TODO votre code ici.

unset($eraseMe);
print_r($eraseMe);

/**
 * 3. Déclarez vous même un tableau et utilisez var_dump pour afficher toutes les informations de debug.
 */
// TODO votre code ici.

$array = ["sdgfhgfsh", "aghr", "zerdhg", "th", "ztdhd", "tht" ,"hyuh"];
var_dump($array);

echo "<br>";

/**
 * 4. Faites la même chose avec le même tableau, mais pour la méthode print_r.
 */
// TODO votre code ici.

print_r($array);
echo "<br>";


/**
 * 5. A l'aide de la méthode isset, testez si la clé du tableau associatif 'doNotExists' existe ( SANS TOUCHER AU TABLEAU )
 *    Si c'est le cas, affichez le message 'Existe', si ce n'est pas le cas, affichez le message 'Existe pas'.
 */
$tab = ["test" => true, "name" => "Doe", "age" => 32];
// TODO Votre code ici.

if (isset($tab["doNotExists"])) echo "existe<br>";
else echo "existe pas<br>";

/**
 * 6. Créez une variable contenant:
 *    - un booléen
 *    - un nombre entier
 *    - un nombre flottant ( à virgule )
 *    - une chaîne de caractère.
 *
 * Créez une fonction qui prend en paramètre une simple variable, cette fonction doit tester le type du contenu de la variable
 * et afficher le texte "La variable passé en paramètre est de type: TYPE".
 *
 * exemple: funct maFunct(monparam){
 *              si monparam EST boolean {
 *                  afficher -> Ma variable est de type: boolean
 *              }
 *              SI monparam EST ENTIER...
 *              SI...
 *              SI...
 *          }
 * Passez toutes les variables créées précédemment dans cette fonction.
 */

// TODO votre code ici.

$bool = true;
$int = 54;
$float = 5.45;
$string = "Salut";

function testVariable($variable){
    if (is_bool($variable)) echo "booléen<br>";
    elseif (is_int($variable)) echo "entier<br>";
    elseif (is_float($variable)) echo "flottant<br>";
    elseif (is_string($variable)) echo "chaine de caractère<br>";
    else echo "rien du tout";
}
testVariable($bool);
testVariable($int);
testVariable($float);
testVariable($string);