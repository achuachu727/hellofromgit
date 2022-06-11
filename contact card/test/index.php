<?php

//print_r($_SERVER);die();

$sitepad['db_name'] = 'amjadali_spad673';
$sitepad['db_user'] = 'amjadali_spad673';
$sitepad['db_pass'] = '2B)0M[Zh7(';
$sitepad['db_host'] = 'localhost';
$sitepad['db_table_prefix'] = 'IYSH8Sy_';
$sitepad['charset'] = 'utf8mb4';
$sitepad['collate'] = 'utf8mb4_unicode_ci';
$sitepad['serving_url'] = 'test.amjadali.cyou';// URL without protocol but with directory as well
$sitepad['url'] = 'https://test.amjadali.cyou';
$sitepad['relativeurl'] = '';
$sitepad['.sitepad'] = '/home/amjadali';
$sitepad['sitepad_plugin_path'] = '/usr/local/sitepad';
$sitepad['editor_path'] = '/usr/local/sitepad/editor';
$sitepad['path'] = dirname(__FILE__);
$sitepad['AUTH_KEY'] = 'RjfXBqN291WjKKOsvhRNWlXC80K9A8oStMzAsHnOWbiqen3u4ZEr9YAkPYBp6cPN';
$sitepad['SECURE_AUTH_KEY'] = '87X0Q3yhzQdHdGMecVjtY6kxg1tUaqXOe27jd35u2tLqYCCIGP84QDBvlkWRT3oJ';
$sitepad['LOGGED_IN_KEY'] = 'iZiKshik4lRFUSaP9coRXGFCe8jJtq94RGGCz2RVU7aUGTAcpI1cKRbFkMWcjh8K';
$sitepad['NONCE_KEY'] = 'TeHb5nWfscEtB7mHoSswHJQdfTa2nxkrAiZFUEUv1VU8ioDDvoL8WbXee00UWH7Q';
$sitepad['AUTH_SALT'] = 'zXJrIK31Cw3cmAHhzQyqgmcyL6z4nboNUYEYVmwnabWvy9PMg9teNfrfLr7iFaaw';
$sitepad['SECURE_AUTH_SALT'] = 'cSsxpkZIq0DAme3DDF0NNQaVXAUSogr0Zoo21PmH5vl8D3iGRNPPe7pXX6r54wrB';
$sitepad['LOGGED_IN_SALT'] = 'v1TFD4Zeu3zzHHYSVWAhe8FNJxjpBZ4CS02tIqewbGDW4sfO47naLrPejKUThptJ';
$sitepad['NONCE_SALT'] = 'EPAOlHMHBcMSM5XGQVWYS9fwWdOiPn3F2r5qmFvpVT5rQMXmQvVbC4RxiZTd26Im';

if(!include_once($sitepad['editor_path'].'/site-inc/bootstrap.php')){
	die('Could not include the bootstrap.php. One of the reasons could be open_basedir restriction !');
}

