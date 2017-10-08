<?php
##*HEADER*##

jimport('joomla.plugin.plugin');

/**
 * ECR_COM_NAME Extension Plugin.
 *
 * @package    ECR_COM_NAME
 * @subpackage Plugin
 */
class plgExtensionECR_COM_NAME extends JPlugin
{
    /**
     * Handle post extension install update sites
     *
     * @param	JInstaller	Installer object
     * @param	int			Extension Identifier
     * @since	1.6
     */
    public function onExtensionAfterInstall($installer, $eid)
    {
        $msg = '';

        $msg .=($eid === false)
        ? 'Failed extension install: '.$installer->getError()
        : 'Extension install successful';

        $msg .=($eid)
        ? ' with new extension ID '.$eid
        : ' with no extension ID detected or multiple extension IDs assigned';

        JError::raiseWarning(-1, __METHOD__.': '.$msg);
    }

    /**
     * Allow to processing of extension data after it is saved.
     *
     * @param object   $data   The data representing the extension.
     * @param boolean  $isNew  True if this is new data, false if it is existing data.
     *
     * @return  void
     */
    public function onExtensionAfterSave($data, $isNew)
    {
    }

    /**
     * Handle extension uninstall.
     *
     * @param  JInstaller  $installer Installer instance
     * @param  integer     $eid       Extension id
     * @param  integer     $result    Installation result
     *
     * @return  void
     */
    public function onExtensionAfterUninstall($installer, $eid, $result)
    {
        $msg = '';

        $msg .= 'Uninstallation of '.$eid.' was a ';
        $msg .=($result) ? 'success' : 'failure';

        JError::raiseWarning(-1, __METHOD__.': '.$msg);
    }

    /**
     * After update of an extension.
     *
     * @param  JInstaller  $installer  Installer object
     * @param  integer     $eid        Extension identifier
     */
    public function onExtensionAfterUpdate($installer, $eid)
    {
        $msg = '';

        $msg .=($eid === false)
        ? 'Failed extension update: '.$installer->getError()
        : 'Extension update successful';

        $msg .=($eid)
        ? ' with updated extension ID '.$eid
        : ' with no extension ID detected or multiple extension IDs assigned';

        JError::raiseWarning(-1, __METHOD__.': '.$msg);
    }

    /**
     * @param $method
     * @param $type
     * @param $manifest
     * @param $eid
     *
     * @return  void
     */
    public function onExtensionBeforeInstall($method, $type, $manifest, $eid)
    {
        $msg = '';

        $msg .= 'Installing '.$type.' from '.$method;
        $msg .=($method == 'install') ? ' with manifest supplied' : ' using discovered extension ID '.$eid;

        JError::raiseWarning(-1, __METHOD__.': '.$msg);
    }

    /**
     * Allow to processing of extension data before it is saved.
     *
     * @param  object   $data   The data representing the extension.
     * @param  boolean  $isNew  True is this is new data, false if it is existing data.
     * @return  void
     */
    public function onExtensionBeforeSave($data, $isNew)
    {
    }

    /**
     * @param  integer  $eid  extension id
     *
     * @return  void
     */
    public function onExtensionBeforeUninstall($eid)
    {
        JError::raiseWarning(-1, __METHOD__.': Uninstalling '.$eid);
    }

    /**
     * @param $type
     * @param $manifest
     *
     * @return  void
     */
    public function onExtensionBeforeUpdate($type, $manifest)
    {
        JError::raiseWarning(-1, __METHOD__.': Updating a '.$type);
    }
}
