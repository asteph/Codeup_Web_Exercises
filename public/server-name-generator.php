<?
/**
 * The pageController function handles all processing for this page.
 * @return array An associative array of data to be used in rendering the html view.
 */
function pageController()
{
	$adjectives = ['omniscient', 'lackadaisical', 'devilish', 'resolute', 'evanescent', 'cagey', 'swanky', 'spiffy', 'cumbersome', 'cuddly'];
	$nouns = ['cats', 'tomatoes', 'sister', 'bushes', 'egg', 'beef', 'advice', 'twig', 'snail', 'cake'];
	$randomAdjective = ucfirst($adjectives[array_rand($adjectives)]);
	$randomNoun = ucfirst($nouns[array_rand($nouns)]);
	$data = array(
		'adjective' => $randomAdjective,
		'noun' => $randomNoun
		);
	return $data;
}
// Call the pageController function and extract all the returned array as local variables.
extract(pageController());
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
	<h1><?= "$adjective $noun" ?><h1>
</body>
</html>