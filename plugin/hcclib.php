<?php
/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

defined('_JEXEC') or die;

/**
 * hcclib plugin class.
 *
 * @package     Joomla.plugin
 * @subpackage  System.hcclib
 */

class plgSystemHCClib extends JPlugin
{
    /**
     * Method to register custom library.
     *
     * return  void
     */
    public function onAfterInitialise()
    {
        JLoader::registerNamespace('hcclib', JPATH_LIBRARIES);
    }
}