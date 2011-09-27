<?php
//add setting for buffer compression callback
global $amp_conf;
include_once ($amp_conf['AMPWEBROOT'].'/admin/libraries/freepbx_conf.class.php');
$freepbx_conf =& freepbx_conf::create();
$set = array(
		'value'			=> 'ob_gzhandler',
		'defaultval'	=> 'ob_gzhandler',
		'readonly'		=> 1,
		'hidden'		=> 1,
		'level'			=> 6,
		'module'		=> '',
		'category'		=> 'Developer and Customization',
		'emptyok'		=> 1,
		'name'			=> 'ob_start callback',
		'description'	=> 'This is the callback that will be passed to ob_start.'
						. ' In its default state, ob_gzhandler will be passed which will'
						. ' case all data passed directly by the system to be compressed'
						. ' set this to be blank or something else if this creates issues.',
		'type'			=> CONF_TYPE_TEXT
);
$freepbx_conf->define_conf_setting('buffering_callback', $set);

$set = array(
		'value'			=> 'http://mirror.freepbx.org',
		'defaultval'	=> 'http://mirror.freepbx.org',
		'readonly'		=> 1,
		'hidden'		=> 1,
		'level'			=> 10,
		'module'		=> '',
		'category'		=> 'Internal Use',
		'emptyok'		=> 0,
		'name'			=> 'repo server',
		'description'	=> 'repo server',
		'type'			=> CONF_TYPE_TEXT
);
$freepbx_conf->define_conf_setting('MODULE_REPO', $set);

//login view
$set = array(
		'value'			=> 'views/login.php',
		'defaultval'	=> 'views/login.php',
		'readonly'		=> 1,
		'hidden'		=> 1,
		'level'			=> 10,
		'module'		=> '',
		'category'		=> 'Styling and Logos',
		'emptyok'		=> 0,
		'name'			=> 'View: login.php',
		'description'	=> 'login.php view. This should never be changed except for very advanced layout changes',
		'type'			=> CONF_TYPE_TEXT
);
$freepbx_conf->define_conf_setting('VIEW_LOGIN', $set);

//menu
$set = array(
		'value'			=> 'views/menu.php',
		'defaultval'	=> 'views/menu.php',
		'readonly'		=> 1,
		'hidden'		=> 1,
		'level'			=> 10,
		'module'		=> '',
		'category'		=> 'Styling and Logos',
		'emptyok'		=> 0,
		'name'			=> 'View: menu.php',
		'description'	=> 'menu.php view. This should never be changed except for very advanced layout changes',
		'type'			=> CONF_TYPE_TEXT
);
$freepbx_conf->define_conf_setting('VIEW_MENU', $set);

//jquery ui css
$set = array(
		'value'			=> 'assets/css/jquery-ui.css',
		'defaultval'	=> 'assets/css/jquery-ui.css',
		'readonly'		=> 1,
		'hidden'		=> 1,
		'level'			=> 10,
		'module'		=> '',
		'category'		=> 'Styling and Logos',
		'emptyok'		=> 0,
		'name'			=> 'jQuery UI css',
		'description'	=> 'css file for jquery ui',
		'type'			=> CONF_TYPE_TEXT
);
$freepbx_conf->define_conf_setting('JQUERY_CSS', $set);

//header
$set = array(
		'value'			=> 'views/header.php',
		'defaultval'	=> 'views/header.php',
		'readonly'		=> 1,
		'hidden'		=> 1,
		'level'			=> 10,
		'module'		=> '',
		'category'		=> 'Styling and Logos',
		'emptyok'		=> 0,
		'name'			=> 'View: header.php',
		'description'	=> 'header.php view. This should never be changed except for very advanced layout changes',
		'type'			=> CONF_TYPE_TEXT
);
$freepbx_conf->define_conf_setting('VIEW_HEADER', $set);

//footer
$set = array(
		'value'			=> 'views/footer.php',
		'defaultval'	=> 'views/footer.php',
		'readonly'		=> 1,
		'hidden'		=> 1,
		'level'			=> 10,
		'module'		=> '',
		'category'		=> 'Styling and Logos',
		'emptyok'		=> 0,
		'name'			=> 'View: freepbx.php',
		'description'	=> 'footer.php view. This should never be changed except for very advanced layout changes',
		'type'			=> CONF_TYPE_TEXT
);
$freepbx_conf->define_conf_setting('VIEW_FOOTER', $set);

//footer content
$set = array(
		'value'			=> 'views/footer_content.php',
		'defaultval'	=> 'views/footer_content.php',
		'readonly'		=> 1,
		'hidden'		=> 1,
		'level'			=> 10,
		'module'		=> '',
		'category'		=> 'Styling and Logos',
		'emptyok'		=> 0,
		'name'			=> 'View: footer_content.php',
		'description'	=> 'footer_content.php view. This should never be changed except for very advanced layout changes',
		'type'			=> CONF_TYPE_TEXT
);
$freepbx_conf->define_conf_setting('VIEW_FOOTER_CONTENT', $set);

//browser stats
$set = array(
		'value'			=> true,
		'defaultval'	=> true,
		'readonly'		=> 0,
		'hidden'		=> 1,
		'level'			=> 10,
		'module'		=> '',
		'category'		=> 'System Setup',
		'emptyok'		=> 0,
		'name'			=> 'Browser Stats',
		'description'	=> 'Anonymous browser stat collection utiltiy for improved visuals '
						. 'and browser targeted devlopment foucus',
		'type'			=> CONF_TYPE_BOOL
);
$freepbx_conf->define_conf_setting('BROWSER_STATS', $set);

//alt js
$set = array(
		'value'			=> '',
		'defaultval'	=> '',
		'readonly'		=> 1,
		'hidden'		=> 1,
		'level'			=> 10,
		'module'		=> '',
		'category'		=> 'Styling and Logos',
		'emptyok'		=> 1,
		'name'			=> 'Alternate JS',
		'description'	=> 'Alternate JS file, to supplement legacy.script.js',
		'type'			=> CONF_TYPE_TEXT
);
$freepbx_conf->define_conf_setting('BRAND_ALT_JS', $set);

//set some settings
$freepbx_alt_f	= $freepbx_conf->get_conf_setting('BRAND_FREEPBX_ALT_FOOT')
				? $freepbx_conf->get_conf_setting('BRAND_FREEPBX_ALT_FOOT')
				: _("FreePBX&reg;");
$freepbx_logo_f = $freepbx_conf->get_conf_setting('BRAND_IMAGE_FREEPBX_FOOT')
				? $freepbx_conf->get_conf_setting('BRAND_IMAGE_FREEPBX_FOOT') 
				: 'images/freepbx_small.png';
$freepbx_link_f = $freepbx_conf->get_conf_setting('BRAND_IMAGE_FREEPBX_LINK_FOOT')
				? $freepbx_conf->get_conf_setting('BRAND_IMAGE_FREEPBX_LINK_FOOT') 
				: 'http://www.freepbx.org';
				
$freepbx_conf->set_conf_values(
			array('BRAND_IMAGE_FREEPBX_LEFT' 		=> 'images/tango.png'),
			array('BRAND_IMAGE_FREEPBX_LINK_LEFT'	=> 'http://www.freepbx.org'),
			array('BRAND_FREEPBX_ALT_FOOT'			=> $freepbx_alt_f),
			array('BRAND_IMAGE_FREEPBX_FOOT'		=> $freepbx_logo_f),
			array('BRAND_IMAGE_FREEPBX_LINK_FOOT'	=> $freepbx_link_f),
			true, true);
			
//depreciated
//views
$freepbx_conf->remove_conf_settings('VIEW_FREEPBX');
$freepbx_conf->remove_conf_settings('VIEW_FREEPBX_ADMIN');
$freepbx_conf->remove_conf_settings('VIEW_FREEPBX_RELOAD');
$freepbx_conf->remove_conf_settings('VIEW_FREEPBX_RELOADBAR');
$freepbx_conf->remove_conf_settings('VIEW_UNAUTHORIZED');
$freepbx_conf->remove_conf_settings('VIEW_LOGGEDOUT');
$freepbx_conf->remove_conf_settings('VIEW_LOGGEDOUT');
$freepbx_conf->remove_conf_settings('BRAND_FREEPBX_ALT_RIGHT');
$freepbx_conf->remove_conf_settings('BRAND_IMAGE_FREEPBX_LINK_RIGHT');
$freepbx_conf->remove_conf_settings('BRAND_IMAGE_HIDE_NAV_BACKGROUND');
$freepbx_conf->remove_conf_settings('BRAND_HIDE_LOGO_RIGHT');
$freepbx_conf->remove_conf_settings('BRAND_HIDE_HEADER_MENUS');
$freepbx_conf->remove_conf_settings('BRAND_HIDE_HEADER_VERSION');
$freepbx_conf->remove_conf_settings('VIEW_REPORTS');
$freepbx_conf->remove_conf_settings('VIEW_PANEL');

//commit all settings
$freepbx_conf->commit_conf_settings();
//settings
global $amp_conf;

$outdated = array(
	$amp_conf['AMPWEBROOT'] . '_asterisk',
	$amp_conf['AMPWEBROOT'] . '/admin/common',
	$amp_conf['AMPWEBROOT'] . '/admin/views/freepbx.php',
	$amp_conf['AMPWEBROOT'] . '/admin/views/freepbx_admin.php',
	$amp_conf['AMPWEBROOT'] . '/admin/views/freepbx_reload.php',
	$amp_conf['AMPWEBROOT'] . '/admin/views/freepbx_reloadbar.php',
	$amp_conf['AMPWEBROOT'] . '/admin/views/freepbx_footer.php',
	$amp_conf['AMPWEBROOT'] . '/admin/views/unauthorized.php',
	$amp_conf['AMPWEBROOT'] . '/admin/views/loggedout.php',	
);

out("Cleaning up deprecated or moved files:");

foreach ($outdated as $file) {
	outn("Checking $file..");
	if (file_exists($file) && !is_link($file)) {
		unlink($file) ? out("removed") : out("failed to remove");
	} else {
		out("Not Required");
	}
}
?>
