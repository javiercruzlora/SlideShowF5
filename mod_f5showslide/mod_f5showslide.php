<?php
/**
 * @copyright	Copyright (C) 2015 Javier Cruz Lora. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// sin acceso directo
defined('_JEXEC') or die;
JHTML::_('behavior.tooltip');
JLoader::register('mod_f5showslideHelper', dirname(__FILE__).'/helper.php');
$document = JFactory::getDocument();
JHtml::_('jquery.framework');
JHTML::_('behavior.modal');
JHTML :: _ ('behavior.colorpicker');
$document->addScript(JURI::root(true) ."/modules/mod_f5showslide/js/jquery-ui.min.js");
$document->addScript(JURI::root(true) ."/modules/mod_f5showslide/admin/f5multifield.js");
$document->addScript('http://www.youtube.com/player_api');
$document->addScript('http://a.vimeocdn.com/js/froogaloop2.min.js');
$document->addScript(JURI::root(true) ."/modules/mod_f5showslide/js/f5showslide.js");
$document->addStyleSheet(JURI::base() . 'modules/mod_f5showslide/css/f5showslide.css');
$list = mod_f5showslideHelper::getList($params, $module);
if (isset($list[0])) {
	$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
	require JModuleHelper::getLayoutPath('mod_f5showslide', $params->get('layout', 'default'));
}