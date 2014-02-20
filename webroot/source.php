 <?php 
/**
 * This is a WebbTemp pagecontroller.
 *
 */
// Include the essential config-file which also creates the $webbtemp variable with its defaults.
include(__DIR__.'/config.php'); 
$source = new CSource();

$webbtemp['stylesheet'] = 'css/source.css';

// Do it and store it all in variables in the WebbTemp container.
$webbtemp['title'] = "Källkod";

$webbtemp['header'] = <<<EOD
<img class='sitelogo' src='img/favicon.ico' alt='A logo"'/>
<span class='sitetitle'>Källkod</span>
<span class='siteslogan'>Visar Källkod</span>
EOD;

$webbtemp['main'] = "<h1>Källkod</h1>" . $source->View();




$webbtemp['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mattias Rosengren | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of WebbTemp.
include(WEBBTEMP_THEME_PATH);
