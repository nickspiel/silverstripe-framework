<?php
// Required so SilverStripe includes this module
define('MCE_ROOT', 'jsparty/tiny_mce2/');

// include pear
$path = Director::baseFolder().'/sapphire/pear/';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

// include Auth
$path = Director::baseFolder().'/sapphire/security/';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
?>