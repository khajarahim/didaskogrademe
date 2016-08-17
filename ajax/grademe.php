<?php

require_once(dirname(__FILE__).'/../../../config.php');

global $CFG;

require_login();

$action = $_GET['action'];
switch ($action) {
	case 'load' :
		require_once '../locallib.php';
		getContentFromGradeMe();
	break;
}
exit;
