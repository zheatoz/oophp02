<?php
/**
 * Theme related functions. 
 *
 */
 
/**
 * Get title for the webpage by concatenating page specific title with site-wide title.
 *
 * @param string $title for this page.
 * @return string/null wether the favicon is defined or not.
 */
function get_title($title) {
  global $webbtemp;
  return $title . (isset($webbtemp['title_append']) ? $webbtemp['title_append'] : null);
}



function get_navbar($menu) {
  $html = "<nav class='{$menu['class']}'>\n";
  foreach($menu['items'] as $item) {
   // check if menu file exist if not don't add it to menu
	if (file_exists(WEBBTEMP_INSTALL_PATH . '/webroot/' . $item['url'])) 
	{$html .= "<a id='{$item['url']}' href='{$item['url']}' title='{$item['title']}'>{$item['text']}</a>\n";}
  }
  $html .= "</nav>\n";
  return $html;
}