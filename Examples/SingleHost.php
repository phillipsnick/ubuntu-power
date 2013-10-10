<?php
/**
 * pfSense WOL 
 * 
 * @author      Nick Phillips (nick@linkstudios.co.uk)
 * @copyright   Copyright 2013, Nick Phillips (nick@linkstudios.co.uk)
 * @license     MIT Licence
 */

require_once __DIR__ . '/../vendor/autoload.php';

$service = new \Ubuntu\Power(array(
    'host' =>       '10.0.30.1',
    'username' =>   'wol',
    'password' =>   'woluser'
));
