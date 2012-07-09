<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Namespaces_extension
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaceMappings(array
(
	'Namespaces' => 'Namespaces\_custom_',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// _custom_
	'Namespaces\_custom_\NamespaceClass' => 'system/modules/namespaces_extension/classes/Namespaces/_custom_/NamespaceClass.php',
));
