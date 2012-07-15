<?php
namespace NamespacesExtension;

/**
 * @Overwrite \Namespaces\NamespaceClass
 */
class NamespaceClass extends \Namespaces\NamespaceClass
{
	public function __construct()
	{
		echo 'Hello Contao!';
	}
}
