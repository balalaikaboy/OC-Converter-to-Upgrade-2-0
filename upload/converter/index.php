<?php
/**
 * @version		$Id: converter.php 2014-10-16 10:10Z mic $
 * @package		OpenCart Shopconverter 1.5.x - 2.x
 * @author		Pekka Mansikka - http://pm-netti.com & mic - http://pixelnbit.com
 * @copyright	2014 Pekka & mic
 * @license		MIT http://opensource.org/licenses/MIT
 */

/**
 * note: as of 2014.10 we use mysql instead of mysqli
 * reason 1: available also in older OpenCart versions
 * reason 2: should be enabled on almost all servers
 * @todo move to mysqli
 */

define('VERSION', '1.2.3');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: start.php');
	exit;
}

require_once(DIR_SYSTEM . 'startup.php');

// Application Classes

require_once(DIR_SYSTEM . 'library/user.php');

// Registry
$registry = new Registry();

// Config
$config = new Config();
$registry->set('config', $config);

// Database

$db = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$registry->set('db', $db);

                $colums = $db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "setting`");
		
		$ret = array();

                       foreach($colums->rows as $field){
                         $ret[] = $field['Field'];
                       } 
             

// Settings

if( array_search('store_id', $ret ) ){
/*
 * Version 1.5.0 or newer
 */

     $query = $db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '0'");

} else{
/*
 * Version 1.4.7 - 1.4.9.5
 */

  $query = $db->query("SELECT * FROM " . DB_PREFIX . "setting");

}
     foreach ($query->rows as $setting) {
         if(isset($setting['serialized']) ) {
        /*
         * If database is 1.5.1 or newer
         */
	     if (!$setting['serialized']) {
	  	$config->set($setting['key'], $setting['value']);
	     } else {
		$config->set($setting['key'], unserialize($setting['value']));
	     }
        } else {
      /*
       * If database is 1.5.0 5 or parent
       */
	 $config->set($setting['key'], $setting['value']);
       }
    }
// Loader
$loader = new Loader($registry);
$registry->set('load', $loader);

// Url
$url = new Url(HTTP_SERVER, $config->get('config_secure') ? HTTPS_SERVER : HTTP_SERVER);
$registry->set('url', $url);

// Log
$log = new Log($config->get('config_error_filename'));
$registry->set('log', $log);

function error_handler($errno, $errstr, $errfile, $errline) {
	global $log, $config;

	// error suppressed with @
	if (error_reporting() === 0) {
		return false;
	}

	switch ($errno) {
		case E_NOTICE:
		case E_USER_NOTICE:
			$error = 'Notice';
			break;
		case E_WARNING:
		case E_USER_WARNING:
			$error = 'Warning';
			break;
		case E_ERROR:
		case E_USER_ERROR:
			$error = 'Fatal Error';
			break;
		default:
			$error = 'Unknown';
			break;
	}

	if ($config->get('config_error_display')) {
		echo '<b>' . $error . '</b>: ' . $errstr . ' in <b>' . $errfile . '</b> on line <b>' . $errline . '</b>';
	}

	if ($config->get('config_error_log')) {
		$log->write('PHP ' . $error . ':  ' . $errstr . ' in ' . $errfile . ' on line ' . $errline);
	}

	return true;
}

// Error Handler
set_error_handler('error_handler');

// Request
$request = new Request();
$registry->set('request', $request);

// Response
$response = new Response();
$response->addHeader('Content-Type: text/html; charset=utf-8');
$registry->set('response', $response);

// Cache
$cache = new Cache();
$registry->set('cache', $cache);

// Language Model
$lcache = new LModel();
$registry->set('lmodel', $lcache);

// Session
$session = new Session();
$registry->set('session', $session);

// Language
$languages = array();

$query = $db->query("SELECT * FROM `" . DB_PREFIX . "language`");

foreach ($query->rows as $result) {
	$languages[$result['code']] = $result;
}

$config->set('config_language_id', $languages[$config->get('config_admin_language')]['language_id']);

// Language
$language = new Language($languages[$config->get('config_admin_language')]['directory']);
$language->load($languages[$config->get('config_admin_language')]['filename']);
$registry->set('language', $language);

// Document
$registry->set('document', new Document());

// User
$registry->set('user', new User($registry));

// Front Controller
$controller = new Front($registry);

// Login
$controller->addPreAction(new Action('common/home/login'));

// Permission
$controller->addPreAction(new Action('common/home/permission'));

// Router
if (isset($request->get['route'])) {
	$action = new Action($request->get['route']);
} else {
	$action = new Action('common/home');
}

// Dispatch
$controller->dispatch($action, new Action('error/not_found'));

// Output
$response->output();
?>
