<?php
/**
 * Config-file for WebbTemp. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define WebbTemp paths.
 *
 */
define('WEBBTEMP_INSTALL_PATH', __DIR__ . '/..');
define('WEBBTEMP_THEME_PATH', WEBBTEMP_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(WEBBTEMP_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the WebbTemp variable.
 *
 */
$webbtemp = array();
 
 
/**
 * Site wide settings.
 *
 */
$webbtemp['lang']         = 'sv';
$webbtemp['title_append'] = ' | WebbTemp en webbtemplate';

/**
 * Theme related settings.
 *
 */
$webbtemp['stylesheet'] = 'css/style.css';
$webbtemp['favicon']    = 'favicon.ico';

$webbtemp['navbar'] = array(
  'class' => 'navmenu',
  'items' => array(
   	'hem'         => array('text'=>'Hem',         'url'=>'me.php',          'title' => 'Min presentation om mig själv'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php', 'title' => 'Redovisningar för kursmomenten'),
	'Kalender'     => array('text'=>'Kalender',     'url'=>'Kalender.php',      'title' => 'Kolla kalendern'),
	'Dice'     => array('text'=>'Dice',     'url'=>'dice.php',      'title' => 'Spela tärning'),
	'Dice 100'     => array('text'=>'Dice 100',     'url'=>'get100.php',      'title' => 'Spela 100'),
    'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se källkoden'),
  )

);

/**
 * Settings for JavaScript.
 *
 */
$webbtemp['modernizr'] = 'js/modernizr.js';
$webbtemp['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
$webbtemp['javascript_include'] = array();

/**
 * Google analytics.
 *
 */
$webbtemp['google_analytics'] = 'null'; // Set to null to disable google analytics