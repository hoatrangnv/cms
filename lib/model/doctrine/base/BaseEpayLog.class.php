<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('EpayLog', 'doctrine');

/**
 * BaseEpayLog
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $epaylogid
 * @property timestamp $time
 * @property string $status
 * @property string $code
 * @property integer $success
 * @property integer $type
 * 
 * @method integer   getEpaylogid() Returns the current record's "epaylogid" value
 * @method timestamp getTime()      Returns the current record's "time" value
 * @method string    getStatus()    Returns the current record's "status" value
 * @method string    getCode()      Returns the current record's "code" value
 * @method integer   getSuccess()   Returns the current record's "success" value
 * @method integer   getType()      Returns the current record's "type" value
 * @method EpayLog   setEpaylogid() Sets the current record's "epaylogid" value
 * @method EpayLog   setTime()      Sets the current record's "time" value
 * @method EpayLog   setStatus()    Sets the current record's "status" value
 * @method EpayLog   setCode()      Sets the current record's "code" value
 * @method EpayLog   setSuccess()   Sets the current record's "success" value
 * @method EpayLog   setType()      Sets the current record's "type" value
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     diepth2
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEpayLog extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('epay_log');
        $this->hasColumn('epaylogid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('time', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('status', 'string', 5000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 5000,
             ));
        $this->hasColumn('code', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('success', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('type', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}