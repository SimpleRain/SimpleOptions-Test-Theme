<?php
/*-----------------------------------------------------------------------------------*/
// THEME OPTIONS - SMOF
// Include theme options panel
/*-----------------------------------------------------------------------------------*/
get_template_part( "tgm", "init" );
//get_template_part( "options", "init" );

$plugins = get_option('active_plugins');
foreach (get_option('active_plugins') as $plugin) {
	if (strpos(strtolower($plugin),'simpleoptions') !== false) {
		$folder = plugin_dir_path($plugin);
		include_once(WP_PLUGIN_DIR.'/'.$folder."options-init.php");
	}
}

add_theme_support( 'menus' );