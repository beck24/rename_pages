<?php	

/*
** Rename Pages
**
** @author Matt Beckett, matt@clever-name.com
** @copyright Matt Beckett 2012
** @link http://clever-name.com
** @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
**
*/

function rename_pages_init()
{

	// Extend system CSS with our own styles
	elgg_extend_view('css/elgg','rename_pages/css');
	
}

  
// Initialise this plugin
register_elgg_event_handler('init','system','rename_pages_init');
