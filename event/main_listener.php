<?php
/*
*
* @package Move Attachments tab
* @copyright (c) Galixte (galixte.com)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* 
*/

namespace galixte\moveattachmentstab\event;

use phpbb\user;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class main_listener implements EventSubscriberInterface
{
	/** @var user */
	protected $user;

	/**
	 * Constructor
	 *
	 * @param user             $user         User object
	 */
	public function __construct(user $user)
	{
		$this->user = $user;
	}

	/**
	 * @inheritdoc
	 */
	static public function getSubscribedEvents()
	{
		return array(
			'core.posting_modify_template_vars'		=> 'setup',
		);
	}

	/**
	 * Setup Move Attachments tab
	 *
	 */
	public function setup($event)
	{
		$this->user->add_lang_ext('galixte/moveattachmentstab', 'moveattachmentstab');
	} 
}
