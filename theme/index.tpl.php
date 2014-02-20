﻿<!doctype html>
<html lang='<?=$lang?>'>
<html class='no-js'> <!-- Modernizr will replace the class 'no-js' with a list of features supported by the browser -->
<head>
<script src='<?=$modernizr?>'></script>
<meta charset='utf-8'/>
<title><?=get_title($title)?></title>
<?php if(isset($favicon)): ?><link rel='shortcut icon' href='<?=$favicon?>'/><?php endif; ?>
<link rel='stylesheet' type='text/css' href='<?=$stylesheet?>'/>
</head>
<body>
  <div id='wrapper'>
    <div id='header'><?=$header?></div>
	<?php if(isset($navbar)): ?><div id='navbars'><?=get_navbar($navbar)?></div><?php endif; ?>
    <div id='main'><?=$main?></div>
    <div id='footer'><?=$footer?></div>
  </div>
  <?php if(isset($jquery)):?><script src='<?=$jquery?>'></script><?php endif; ?>
  <?php if(isset($javascript_include)): foreach($javascript_include as $val): ?>
	<script src='<?=$val?>'></script>
  <?php endforeach; endif; ?>
  
  <?php if(isset($google_analytics)): ?>
<script>
  var _gaq=[['_setAccount','<?=$google_analytics?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>
</body>
</html>
