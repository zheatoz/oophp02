<?php 
/**
 * This is a WebbTemp pagecontroller.
 *
 */
// Include the essential config-file which also creates the $webbtemp variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the WebbTemp container.
$webbtemp['title'] = "404";
$webbtemp['header'] = "";
$webbtemp['main'] = "This is a WebbTemp 404. Document is not here.";
$webbtemp['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of WebbTemp.
include(WEBBTEMP_INSTALL_PATH);