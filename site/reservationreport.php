<?php
/**
* @version	$Id$
* @package	Joomla
* @subpackage	Reservation
* @copyright	Copyright (c) 2014 Martin Mooser. All rights reserved.
* @license	http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE
* @author	Martin Mooser
* @authorEmail	m.mooser@bluewin.ch
*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import joomla controller library
jimport('joomla.application.component.controller');
 
// Get an instance of the controller prefixed by HelloWorld
$controller = JControllerLegacy::getInstance('ReservationReport');
 
// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();
?>
