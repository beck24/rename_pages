<?php
// read the languages directory to get a list of existing translations

$language_files = elgg_get_file_list(elgg_get_plugins_path() . "rename_pages/languages/", array(), array(), array('.php'));

$translations = array();
foreach($language_files as $language){
  $translations[] = basename($language, '.php');
}

if(count($translations) == 0){
	echo "<h1>" . elgg_echo('rename_pages:missing:language:file') . "</h1>";
}
else{
	echo "<h1>" . elgg_echo('rename_pages:settings') . "</h1>";
	
	for($i=0; $i<count($translations); $i++){
		$singlefield = $translations[$i].'singular';
		$pluralfield = $translations[$i].'plural';
		
		$singular = $vars['entity']->$singlefield;
		$plural = $vars['entity']->$pluralfield;
		
		//set defaults if nothing has been set yet
		if(empty($singular)){ $singular = elgg_echo('Page'); }
		if(empty($plural)){ $plural = elgg_echo('Pages'); }
		
		$language = elgg_echo('rename_pages:language');
		$html = "<div class=\"rename_pages_language_edit\"><br/>";
		$html .= "$language: <b>{$translations[$i]}</b>";
		$html .= "<table><tr><td>&nbsp;</td></tr><tr><td>";
		$html .= "<label>" . elgg_echo('rename_pages:singular') . ":&nbsp;&nbsp;</label>";
		$html .= "</td><td>";
		$html .= elgg_view('input/text', array('name' => "params[" . $translations[$i].'singular' . "]", 'value' => $singular)) . "<br>";
		$html .= "</td></tr><tr><td>";
		$html .= "<label>" . elgg_echo('rename_pages:plural') . ": </label>";
		$html .= "</td><td>";
		$html .= elgg_view('input/text', array('name' => "params[" . $translations[$i].'plural' . "]", 'value' => $plural)) . "<br>";
		$html .= "</td></tr></table>";
		$html .= "</div>";
		echo $html;
	}
}
