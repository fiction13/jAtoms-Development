<?php
/*
 * @package    jAtomS - Development Plugin
 * @version    1.0.0
 * @author     Atom-S - atom-s.com
 * @copyright  Copyright (c) 2017 - 2021 Atom-S LLC. All rights reserved.
 * @license    GNU/GPL license: https://www.gnu.org/copyleft/gpl.html
 * @link       https://atom-s.com/
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;

class plgJAtomSDevelopment extends CMSPlugin
{
	/**
	 * Affects constructor behavior. If true, language files will be loaded automatically.
	 *
	 * @var  boolean
	 *
	 * @since   1.0.0-dev
	 */
	protected $autoloadLanguage = true;
}