<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Méthode sur les strings</title>
</head>
<body>
    <div class="container">
        <?php
        /* METHODE SUR LES STRINGS */
        /* addslashes() ajoute des antislash ds une chaine */
        $monMot = "Aujourd'hui nous sommes le 8 janvier 2022";
        echo $monMot . "<br>";

        $monMot = addslashes($monMot);
        echo addslashes($monMot . "<br>");

        /* count_chars() statisque du nombre de fois que la lettre est appelé */
        $myMot = "Aujourd'hui nous sommes le 8 janvier, hier nous étions le 7 janvier";
        $statistique = count_chars($myMot);
        print_r($statistique);
        // paramètre mode ( deuxième paramètre ) à 1a la méthode ne retourne que les caractères utilisés dans la chaîne.
        $myMot = "Aujourd'hui nous sommes le 8 janvier, hier nous étions le 7 janvier";
        $statistique = count_chars($myMot, 1);
        foreach ($statistique as $char => $valeur) {
            //$char est l'index du tableau , contient la val num de la lettre
            // chr() permet de transformer char en carac
            echo "le carctere " .chr($char) .  "est utilisé " . $valeur . "fois <br>";
        }

        /* Explode scinde une chaine de caractères en segment (tableau) premier param delimiteur, second la chaine, le trois limite max */
        $maphrase = "Le 15 janvier et hier nous étions le 14";
        $mots = explode(" ", $maphrase);

        foreach ($mots as $mot) {
            echo "Mot: $mot <br>";
        }

        /* implode() rassemble les éléments d'un tableau en une chaine */
        $tableau = ["Hello", "World", "!"];
        $chaine = implode($tableau);
        echo $chaine;

        $tableau = ["Hello", "World", "!"];
        $chaine = implode(",",$tableau);
        echo $chaine;

        /*lcfirst met le premier caractère en minuscule*/
        $chaine = "HELLO WORLD !";
        $chaine = lcfirst($chaine);
        echo $chaine;

        /* ucfirst premier caractere en majuscule */
        $chaine = "hello world!";
        $chaine = ucfirst($chaine);
        echo $chaine;

        /* ucwords() met en maj la premiere lettre de tout les mots */
            $chaine = "hello world, comment ça va bien ?";
            $chaine = ucwords($chaine);
            echo $chaine;

        /* wordwrap() effectue la césure d'une chaine */
        $chaine = "hello world, comment ça va ?";
        $chaine = wordwrap($chaine, 10, "<br>");
        echo $chaine;

        /* trim() supprime les espaces en début et fin de chaine */
        $chaine = " hello the world ";
        echo "Taille de la chaine:" . strlen($chaine) . "<br>";
        $chaine = trim($chaine);
        echo "Taille de la chaine:" . strlen($chaine) . "<br>";

        /* ltrim (meme principe mais en debut de chaine */

        /* rtrim() meme principe mais en fin de chaine */

        /* number_format formate un nombre pour l'affichage */
        $number = 5850.32;
        $nombre_format_francais = number_format($number,2,',',' ');

        /* str_replace remplace toutes les occurences dans une chaine */
        $chaine = "hello, the friends, i love php!";
        echo $chaine;

        $chaine = str_replace('php', 'javascript', $chaine);
        echo $chaine;

        /* str_ireplace pareil que str mais insensible à la casse */

        /* str_pad complete une chaine jusqua la taille donnee */
        $text = "mon texte";
        echo str_pad($text,11,"---");

        /* str_shuffle() melange les caracteres dune chaine */

        /* str_split() convertit une chaine de caracteres en tableau */

        /* str_word_count() compte le nombre de mots utilisés dans une chaine */

        /* strip_tags() supprime les balises html à utliser dans une verif form */

        /* str_pos cherche la position de la premiere occurence dans une chaine */

        /* str_ipos recherche la position de la premiere occurence sans tenir compte de la casse */

        /* strstr trouve la premiere occurence ds une chaine et retourne ce quil y a a gche ou droite en plus */

        /* strlen calcule la taille dune chaine */

        /* strrpos cherche la pos de la derniere occurence dune sous chaine ds une chaine */

        /* strrev inverse une chaine */

        /* strtolower renvoie une chaine en minuscule */

        /* strtoupper renvoie une chaine en majuscule */

        /* substr retourne un segment de chaine */

        /* sprintf retourne une chaine formatee */

        ?>
</body>
</html>


