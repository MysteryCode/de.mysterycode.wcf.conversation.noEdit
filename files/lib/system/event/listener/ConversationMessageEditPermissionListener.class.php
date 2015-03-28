<?php

namespace wcf\system\event\listener;
use wcf\system\event\listener\IParameterizedEventListener;
use wcf\system\exception\PermissionDeniedException;
use wcf\system\WCF;

/**
 * Checks the permission of a user to edit conversation messages
 *
 * @author	Florian Gail
 * @copyright	2013 Florian Gail <http://www.mysterycode.de/>
 * @license	Creative Commons <by-nc-nd> <http://creativecommons.org/licenses/by-nc-nd/4.0/legalcode>
 * @package	de.mysterycode.wcf.conversation.noEdit
 * @category	WCF
 */
class ConversationMessageEditPermissionListener implements IParameterizedEventListener {
	/**
	 * @see \wcf\system\event\IEventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName, array &$parameters) {
		if (!WCF::getSession()->getPermission('user.conversation.message.canEdit'))
			throw new PermissionDeniedException();
	}
}
