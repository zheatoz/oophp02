 <?php 
/**
 * This is a WebbTemp pagecontroller.
 *
 */
// Include the essential config-file which also creates the $webbtemp variable with its defaults.
include(__DIR__.'/config.php'); 

$roll = null;
	if(isset($_POST["kast"])) {
		$roll = $_POST["kast"];
	}
	
	if($roll > 20) {
	$html = "<p>Du har gjort för många kast, var god försök med färre kast";
	$roll = 0;
	}
	else if($roll > 0){
	$dice = new CDice();
	$dice->Roll($roll);
	$html = "<p>Du gjorde {$roll} kast och fick följande resultat.</p>\n<ul>";
		foreach($dice->GetResults() as $val) {
			$html .= "\n<li>{$val}</li>";
		}
	$html .= "\n</ul>\n";
	$html .= "<p>Totalt fick du " . $dice->GetTotal() . " poäng på dina kast.</p>";
	}else{
	$html = null;
	}

// Do it and store it all in variables in the WebbTemp container.
$webbtemp['title'] = "Tärnings kastning";

$webbtemp['header'] = <<<EOD
<img class='background' src='img/banner3.jpg' alt='A logo"'/>
<span class='sitetitle'>Tärnings kastning</span>
<span class='siteslogan'>Hur mycket poäng kan du få?</span>
EOD;

$webbtemp['main'] = <<<EOD
<h1>Kasta tärning</h1>
<p>Detta är en exempelsida som visar hur WebbTemp fungerar tillsammans med återanvändbara moduler.</p>
<p>Hur många kast vill du göra, 
<form method = 'POST' action = 'dice.php'>
        <input type = 'text' name = 'kast' size = '1' >
        <input type = 'submit' value = 'Kasta' name="submit">
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
