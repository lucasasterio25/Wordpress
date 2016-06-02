<?php
/*
Plugin Name: TESTE ABRIL
Description:
Version: 1
Author:
Author URI:
*/

//menu items
add_action('admin_menu','sinetiks_schools_modifymenu');
function sinetiks_schools_modifymenu() {

	//this is the main item for the menu
	add_menu_page('TESTE ABRIL', //page title
	'TESTE ABRIL', //menu title
	'manage_options', //capabilities
	'sinetiks_schools_list', //menu slug
	sinetiks_schools_list //function
	);

	//this is a submenu
	add_submenu_page('sinetiks_schools_list', //parent slug
	'Adicionar novo', //page title
	'Adicionar novo', //menu title
	'manage_options', //capability
	'sinetiks_schools_create', //menu slug
	'sinetiks_schools_create'); //function

	//this submenu is HIDDEN, however, we need to add it anyways
	add_submenu_page(null, //parent slug
	'Update', //page title
	'Update', //menu title
	'manage_options', //capability
	'sinetiks_schools_update', //menu slug
	'sinetiks_schools_update'); //function
}
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'schools-list.php');
require_once(ROOTDIR . 'schools-create.php');
require_once(ROOTDIR . 'schools-update.php');
