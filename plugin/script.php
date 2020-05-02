<?php
/**
 * System - HCC namespaced library loader
 * @package		Joomla.Plugin
 * @subpackage	system.hcclib
 * @since 1.1
 * @copyright	Copyright (C) 2020 B.F. van den Dikkenberg All rights reserved.
 * @license		GNU General Public License version 2 or later
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Script voor de HCC xml Handler plugin
 */
class plgSystemHCClibInstallerScript
{
    /**
     * Install plug-in acties
     *
     * @return void
     */
    function install($parent)
    {
        $query = "UPDATE `#__extensions` SET `enabled` = '1' WHERE `type` = 'plugin' AND `element` = 'hcclib'";
        $db = JFactory::getDbo();
        $db->setQuery($query);
        $db->execute();
    }
    /**
     * Uninstall Plugin acties
     *
     * @return void
     */
    function uninstall($parent)
    {
    }
    /**
     * Update acties
     *
     * @return void
     */
    function update($parent)
    {
    }
    /**
     * checks voor install/update
     *
     * @return void
     */
    function preflight($type, $parent)
    {
    }
    /**
     * checks naar install/update
     *
     * @return void
     */
    function postflight($type, $parent)
    {
    }
}