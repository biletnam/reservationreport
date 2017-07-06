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

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die;

class ReservationReportViewReport extends JViewLegacy {
	protected $item;
	protected $pageHeading = 'COM_RESERVATION_PAGE_TITLE_DEFAULT';
	protected $paramsMenuEntry;
	protected $user;

	function display($tpl = null) {
		/*
		 * Init variables
		 */
		$this->state = $this->get('State');
		if ($this->getLayout() =='form') {
			$this->getModel()->setUseAlias(false);
		}
		$this->user =& JFactory::getUser();
		$app = JFactory::getApplication();
		$this->document =& JFactory::getDocument();
		$this->item = $this->get('Item');
		$this->form = $this->get('Form');
		$menu = $app->getMenu();
		if (is_object($menu)) {
			$currentMenu = $menu->getActive();
			if (is_object($currentMenu)) {
				$this->paramsMenuEntry = $currentMenu->params;
			}
		}

		/*
		 * Init document
		 */
		JFactory::getDocument()->setMetaData('robots', 'noindex, nofollow');
		parent::display($tpl);
	}
}
?>
