<?php
defined('_JEXEC') or die;
if (file_exists(dirname(__DIR__) . '/defines.php'))
{
	require_once dirname(__DIR__) . '/defines.php';
}
if (!defined('_JDEFINES'))
{
	require_once JPATH_BASE . '/includes/defines.php';
}
require_once JPATH_LIBRARIES . '/import.php';
require_once JPATH_LIBRARIES . '/cms.php';
$currentpath = realpath(__DIR__ ) ;
$templates = array(
	JPATH_SITE . '/modules/mod_f5showslide/less/f5showslide.less' => JPATH_SITE . '/modules/mod_f5showslide/css/f5showslide.css'
);
$less = new JLess;
$less->setFormatter(new JLessFormatterJoomla);

foreach ($templates as $source => $output)
{
	try
	{
		$less->compileFile($source, $output);
	}
	catch (Exception $e)
	{
		echo $e->getMessage();
	}
}