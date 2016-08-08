<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DownloadLog', 'doctrine');

/**
 * BaseDownloadLog
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $downloadlogid
 * @property string $phonename
 * @property string $brandname
 * @property timestamp $datetime
 * @property integer $width
 * @property integer $height
 * @property integer $setup
 * @property integer $registry
 * @property integer $login
 * @property string $version
 * @property timestamp $setuptime
 * @property string $source
 * 
 * @method integer     getDownloadlogid() Returns the current record's "downloadlogid" value
 * @method string      getPhonename()     Returns the current record's "phonename" value
 * @method string      getBrandname()     Returns the current record's "brandname" value
 * @method timestamp   getDatetime()      Returns the current record's "datetime" value
 * @method integer     getWidth()         Returns the current record's "width" value
 * @method integer     getHeight()        Returns the current record's "height" value
 * @method integer     getSetup()         Returns the current record's "setup" value
 * @method integer     getRegistry()      Returns the current record's "registry" value
 * @method integer     getLogin()         Returns the current record's "login" value
 * @method string      getVersion()       Returns the current record's "version" value
 * @method timestamp   getSetuptime()     Returns the current record's "setuptime" value
 * @method string      getSource()        Returns the current record's "source" value
 * @method DownloadLog setDownloadlogid() Sets the current record's "downloadlogid" value
 * @method DownloadLog setPhonename()     Sets the current record's "phonename" value
 * @method DownloadLog setBrandname()     Sets the current record's "brandname" value
 * @method DownloadLog setDatetime()      Sets the current record's "datetime" value
 * @method DownloadLog setWidth()         Sets the current record's "width" value
 * @method DownloadLog setHeight()        Sets the current record's "height" value
 * @method DownloadLog setSetup()         Sets the current record's "setup" value
 * @method DownloadLog setRegistry()      Sets the current record's "registry" value
 * @method DownloadLog setLogin()         Sets the current record's "login" value
 * @method DownloadLog setVersion()       Sets the current record's "version" value
 * @method DownloadLog setSetuptime()     Sets the current record's "setuptime" value
 * @method DownloadLog setSource()        Sets the current record's "source" value
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     diepth2
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDownloadLog extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('download_log');
        $this->hasColumn('downloadlogid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('phonename', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('brandname', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('datetime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('width', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('height', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('setup', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('registry', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('login', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('version', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => ' ',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('setuptime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('source', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}