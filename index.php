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



?> 


  
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>