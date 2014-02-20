 <?php 

// Include the essential config-file which also creates the $webbtemp variable with its defaults.
include(__DIR__.'/config.php'); 

	if(isset($_SESSION['dicegame100'])) {
		$game = $_SESSION['dicegame100'];
	}else {
		$game = new gametest();
		$_SESSION['dicegame100'] = $game;
	} 	
	if(isset($_POST['Kasta'])) {
		$game->adddice();
	}else if(isset($_POST['Save'])) {
		$game->savedice();
	}else if(isset($_POST['Restart'])) {
		$game->restart();
	}
	$html = $game->gethtml();	
	
$webbtemp['title'] = "Tärnings kastning";

$webbtemp['header'] = <<<EOD
<img class='background' src='img/banner3.jpg' alt='A logo"'/>
<span class='sitetitle'>Tärnings kastning</span>
<span class='siteslogan'>Hur många drag behöver du?</span>
EOD;

$webbtemp['main'] = <<<EOD
<h1>Kasta tärning</h1>
<p>Detta är ett spel där det går ut på att få 100 poäng på så få kast som möjligt, hur många kast behöver du?</p>

<form method = 'POST' name="myForm" action = 'get100.php'>
    <input type = 'submit' value = 'Kast' name="Kasta">	
	<input type = 'submit' value = 'Spara' name="Save">	
	<input type = 'submit' value = 'Starta om' name="Restart">	
</form> {$html}

EOD;

$webbtemp['footer'] = <<<EOD
<div id="footer">
<footer class="byline"> Copyright (c) Mattias Rosengren </footer>
<footer class="bottom"> 
<a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a>
 </footer>
</div>
EOD;

// Finally, leave it all to the rendering phase of WebbTemp.
include(WEBBTEMP_THEME_PATH);
