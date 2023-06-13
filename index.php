<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h1>Les Functions en PHP </h1>
    <?php
// Signature d'une fonction : Arguments, retour et indications type :
# Une fonction accepte en entrée des arguments et retourne ine valeur avec le mot clé "return" .


// Declartion d'une fonction :

function sayHello(string $firstName = 'John' , string $lastName = 'Doe'): string
  {
    $currentTime = date('H:i');
    return "Bonjour " .$firstName. " " .$lastName ." ! il est " . $currentTime .".";
  }

 $message = sayHello('Houss' , 'elYaacoubi');
 echo $message ;

// création d'une fonction :

function stopWorking(string $firstName = 'X' , string $lastName = 'Y'):string
  {
    $currentTime = date('H:i');
    return "Bonjour " . $firstName . " " . $lastName .",". " il est " . $currentTime . ". " . "Vous devez quiter votre poste de travail !. Bonne soirée .";
  }
echo $message = stopWorking('antoine' , 'Rootello');


  // On appelle "SIGNATURE D UNE FONCTION" l'ensemble =
                 // Nom de la fonction 
                 // l'argument de la fonction  
                 // Le retour  de la fonction 

// Une fonction reoturne toujours une valeur, si elle ne retourne rien , elle retourne "NULL".
  // Le retour de la fonction est indiqué avec le mot clé " return".
  // l'instruction de retour n'est pa dobligatoire . Si elle est omise ,la fonction retourne "NULL" à la fin de l'exécutipon du corps de la fonction .
  //L'instruction "RETURN" met fin à l'exécution du corps de la fonction , toute instruction placée derrière ne sera jamais exécutée . Pour récuoérer le resultat d'une fonction , il suffit de déclarer une variable et de l'assigner à l'appel de la fonction.

  ?>
  <h3> Nombre défini ou indéfini d'argument </h3>
    <h5>Complement</h5>
    <p>le nombre d'arguement pris par une fonction est ce qu'on appelle son "arité" Par exemple ,la fonction 
    foo($a, $b, $c = 'bar') a une arité de 3.
    Une fonction qui a un nombre indefini d'argument est une fonction VARIADIQUE .</p>
    
<?php

  function foo(int ...$args): void
  {
    // print_r permet d'afficher le contenu d'un tableau sur la sortie standard
    print_r($args);
  }
foo(1,2,3,4,5);
echo"<br>" ;

// fouction multiply():

function multiply(int $x , int $y): int
  {
    return $x * $y ;
  }

echo mutiply(1, 2);
echo multiply(...[1, 2]);
echo"<br>" ;

// AU cas ou il y' a un argument sans paramétre correspondant sera simplement ignorés , EXAMPLE :
echo multiply(...[1, 2, 3]);
echo"<br>" ;




  
?> 


  
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>