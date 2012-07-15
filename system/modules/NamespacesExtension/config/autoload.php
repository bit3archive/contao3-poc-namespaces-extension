<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package NamespacesExtension
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register class mapping
 */
ClassLoader::addClassMappings(array
(
	'Runtime\Namespaces\NamespaceClass' => 'NamespacesExtension\NamespaceClass',
));
