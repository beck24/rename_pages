<?php

$languagecode = get_current_language();
$singularvar = $languagecode . 'singular';
$pluralvar = $languagecode . 'plural';

$singular = elgg_get_plugin_setting($singularvar, 'rename_pages');
$plural = elgg_get_plugin_setting($pluralvar, 'rename_pages');

// set defaults if setting can't be found
if(empty($singular)){ $singular = elgg_echo('Page'); }
if(empty($plural)){ $plural = elgg_echo('Pages'); }

// get first letter of each, and register variables for starting with uppercase and lowercase first letter
// $usingle = uppercase singluar eg. Friend
// $lsingle = lowercase singluar eg. friend
// $uplural = uppercase plural eg. Friends
// $lplural = lowercase plural eg. friends

$lsingle = strtolower($singular);
$lplural = strtolower($plural);

//create our uppercase singular
$first_letter = strtoupper($singular[0]);
$rest_of_word = substr($singular, 1);

$usingle = $first_letter . $rest_of_word;

//create our uppercase plural
$first_letter = strtoupper($plural[0]);
$rest_of_word = substr($plural, 1);

$uplural = $first_letter . $rest_of_word;



// get variables for groups 
$singular = '';
$plural = '';
if(elgg_is_active_plugin('rename_groups')){
  $singular = elgg_get_plugin_setting($singularvar, 'rename_groups');
  $plural = elgg_get_plugin_setting($pluralvar, 'rename_groups');
}

  // set defaults if setting can't be found
  if(empty($singular)){ $singular = elgg_echo('groups:group'); }
  if(empty($plural)){ $plural = elgg_echo('groups'); }

  // get first letter of each, and register variables for starting with uppercase and lowercase first letter
  // $usingle = uppercase singluar eg. Group
  // $lsingle = lowercase singluar eg. group
  // $uplural = uppercase plural eg. Groups
  // $lplural = lowercase plural eg. groups

  $glsingle = strtolower($singular);
  $glplural = strtolower($plural);

  //create our uppercase singular
  $first_letter = strtoupper($singular[0]);
  $rest_of_word = substr($singular, 1);

  $gusingle = $first_letter . $rest_of_word;

  //create our uppercase plural
  $first_letter = strtoupper($plural[0]);
  $rest_of_word = substr($plural, 1);

  $guplural = $first_letter . $rest_of_word;
  
  
  /* RENAME FRIENDS */
// get variables for friends 
$singular = '';
$plural = '';
if(elgg_is_active_plugin('rename_friends')){
  $singular = elgg_get_plugin_setting($singularvar, 'rename_friends');
  $plural = elgg_get_plugin_setting($pluralvar, 'rename_friends');
}

// set defaults if setting can't be found
if(empty($singular)){ $singular = elgg_echo('friend'); }
if(empty($plural)){ $plural = elgg_echo('friends'); }

// get first letter of each, and register variables for starting with uppercase and lowercase first letter
// $usingle = uppercase singluar eg. Friend
// $lsingle = lowercase singluar eg. friend
// $uplural = uppercase plural eg. Friends
// $lplural = lowercase plural eg. friends

$flsingle = strtolower($singular);
$flplural = strtolower($plural);

//create our uppercase singular
$first_letter = strtoupper($singular[0]);
$rest_of_word = substr($singular, 1);

$fusingle = $first_letter . $rest_of_word;

//create our uppercase plural
$first_letter = strtoupper($plural[0]);
$rest_of_word = substr($plural, 1);

$fuplural = $first_letter . $rest_of_word;
 
$english = array(
	//
	//	rename_pages language mappings
	//
	'rename_pages:language' => "Language",
	'rename_pages:missing:language:file' => "Language file appears to be missing.  Check that it exists and that the languages directory has read access.",
	'rename_pages:plural' => "Plural",
	'rename_pages:settings' => "Rename Pages for each language",
	'rename_pages:singular' => "Singular",


 	/**
	 * Menu items and titles
	 */

	'pages' => $uplural,
	'pages:owner' => "%s's $lplural",
	'pages:friends' => "$fuplural' $lplural",
	'pages:all' => "All site $lplural",
	'pages:add' => "Add $lsingle",

	'pages:group' => "$gusingle $lplural",
	'groups:enablepages' => 'Enable $glsingle $lplural',

	'pages:edit' => "Edit this $lsingle",
	'pages:delete' => "Delete this $lsingle",
	'pages:view' => "View $lsingle",
	'pages:new' => "A new $lsingle",
	'pages:notification' =>
"%s added a new $lsingle:

%s
%s

View and comment on the new $lsingle:
%s
",
	'item:object:page_top' => 'Top-level $lplural',
	'item:object:page' => $uplural,
	'pages:nogroup' => "This $glsingle does not have any $lplural yet",
	'pages:more' => "More $lplural",
	'pages:none' => "No $lplural created yet",

	/**
	* River
	**/

	'river:create:object:page' => "%s created a $lsingle %s",
	'river:create:object:page_top' => "%s created a $lsingle %s",
	'river:update:object:page' => "%s updated a $lsingle %s",
	'river:update:object:page_top' => "%s updated a $lsingle %s",
	'river:comment:object:page' => "%s commented on a $lsingle titled %s",
	'river:comment:object:page_top' => "%s commented on a $lsingle titled %s",

	/**
	 * Form fields
	 */

	'pages:title' => "$usingle title",
	'pages:description' => "$usingle text",

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => "No access to $lsingle",
	'pages:cantedit' => "You cannot edit this $lsingle",
	'pages:saved' => "$usingle saved",
	'pages:notsaved' => "$usingle could not be saved",
	'pages:error:no_title' => "You must specify a title for this $lsingle.",
	'pages:delete:success' => "The $lsingle was successfully deleted.",
	'pages:delete:failure' => "The $lsingle could not be deleted.",

	/**
	 * Widget
	 **/

	'pages:num' => "Number of $lplural to display",
	'pages:widget:description' => "This is a list of your $lplural.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "View $lsingle",
	'pages:label:edit' => "Edit $lsingle",
	'pages:label:history' => "$usingle history",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "This $lsingle",
	'pages:sidebar:children' => "Sub-$lplural",

	'pages:newchild' => "Create a sub-$lsingle",

);

add_translation("en", $english);