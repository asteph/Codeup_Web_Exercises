<?php
require 'functions.php';
// Require or include statements are allowed here. All other code goes in the pageController function.

/**
 * The pageController function handles all processing for this page.
 * @return array An associative array of data to be used in rendering the html view.
 */
function pageController()
{
   var_dump($_GET);
   if (empty($_GET)){
       $counter = 0;
       $play = 'SERVE IT!';
   }else if(inputGet('action') == 'hit'){
       $counter = (int)$_GET['counter'] + 1;
       $play = 'PONG!';
   }else if (inputGet('action') == 'miss'){
       $counter = 0;
       $play = 'GAME OVER';

   }

   // Initialize an empty data array.
   $data = array(
        'value' => $counter,
        'gameStatus' => $play
    );

   // Return the completed data array.
   return $data;    
    
}

// Call the pageController function and extract all the returned array as local variables.
extract(pageController());

// Only use echo, conditionals, and loops anywhere within the HTML.
?>
<!doctype html>
<html>
    <head>
        <title>PING</title>
         <style>
        body{
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        </style>
    </head>
    <body>
        <h1><?= $gameStatus ?></h1>
        <h2>Volley Number: <?= $value?></h2>
        <a href="/ping.php?action=hit&counter=<?= $value ?>">HIT</a>
        <a href="/ping.php?action=miss&counter=<?= $value ?>">MISS</a>
    </body>
</html>