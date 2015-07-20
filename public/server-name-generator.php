<?php 

$adjectives = ['omniscient', 'lackadaisical', 'devilish', 'resolute', 'evanescent', 'cagey', 'swanky', 'spiffy', 'cumbersome', 'cuddly'];
$nouns = ['cats', 'tomatoes', 'sister', 'bushes', 'egg', 'beef', 'advice', 'twig', 'snail', 'cake'];
$randomAdjective = ucfirst($adjectives[array_rand($adjectives)]);
$randomNoun = ucfirst($nouns[array_rand($nouns)]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Generator</title>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Berkshire+Swash" />
	<style>
	body {
	  padding-top: 50px;
	  text-align: center;
	  font: 400 3.5em/125% 'Berkshire Swash', Helvetica, Sans-serif;
	  line-height: 2em;
	}
		
	</style>
</head>
<body>
	<h1><?php echo  "$randomAdjective $randomNoun" ?><h1>
</body>
</html>