<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('GameVersion', 'doctrine');

/**
 * BaseGameVersion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $versionid
 * @property integer $clientid
 * @property string $versioncode
 * @property string $versionmsg
 * @property integer $forceupdate
 * @property timestamp $lastupdatedtime
 * @property integer $status
 * 
 * @method integer     getVersionid()       Returns the current record's "versionid" value
 * @method integer     getClientid()        Returns the current record's "clientid" value
 * @method string      getVersioncode()     Returns the current record's "versioncode" value
 * @method string      getVersionmsg()      Returns the current record's "versionmsg" value
 * @method integer     getForceupdate()     Returns the current record's "forceupdate" value
 * @method timestamp   getLastupdatedtime() Returns the current record's "lastupdatedtime" value
 * @method integer     getStatus()          Returns the current record's "status" value
 * @method GameVersion setVersionid()       Sets the current record's "versionid" value
 * @method GameVersion setClientid()        Sets the current record's "clientid" value
 * @method GameVersion setVersioncode()     Sets the current record's "versioncode" value
 * @method GameVersion setVersionmsg()      Sets the current record's "versionmsg" value
 * @method GameVersion setForceupdate()     Sets the current record's "forceupdate" value
 * @method GameVersion setLastupdatedtime() Sets the current record's "lastupdatedtime" value
 * @method GameVersion setStatus()          Sets the current record's "status" value
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     diepth2
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGameVersion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('game_version');
        $this->hasColumn('versionid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('clientid', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('versioncode', 'string', 5, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 5,
             ));
        $this->hasColumn('versionmsg', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('forceupdate', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('lastupdatedtime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('status', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}