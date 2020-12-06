<?php
spl_autoload_register(function($classname) {
	$parts = explode('\\', $classname);
	$class = $parts[count($parts) - 1];

	if (file_exists(APP_DIR . "/" . $class . '.php')) {
		require APP_DIR . '/' . $class . '.php';
	}
	else if (file_exists(FRAMEWORK_DIR . "/" . $class . '.php')) {
		require FRAMEWORK_DIR . '/' . $class . '.php';
	}
	else if (file_exists(TPL_DIR . "/" . $class . '.php')) {
		require TPL_DIR . '/' . $class . '.php';
	}
	else if (file_exists(DATA_DIR . "/" . $class . '.php')) {
		require DATA_DIR . '/' . $class . '.php';
	}
	else {
		trigger_error('Cannot find class/interface/abstract definition: '. $class, E_USER_ERROR);
	}
});