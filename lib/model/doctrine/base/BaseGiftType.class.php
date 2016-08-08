<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('GiftType', 'doctrine');

/**
 * BaseGiftType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $gifttypeid
 * @property string $type
 * @property float $value
 * @property string $description
 * @property timestamp $createdtime
 * @property timestamp $expiredtime
 * @property integer $volume
 * @property string $code
 * @property integer $status
 * 
 * @method integer   getGifttypeid()  Returns the current record's "gifttypeid" value
 * @method string    getType()        Returns the current record's "type" value
 * @method float     getValue()       Returns the current record's "value" value
 * @method string    getDescription() Returns the current record's "description" value
 * @method timestamp getCreatedtime() Returns the current record's "createdtime" value
 * @method timestamp getExpiredtime() Returns the current record's "expiredtime" value
 * @method integer   getVolume()      Returns the current record's "volume" value
 * @method string    getCode()        Returns the current record's "code" value
 * @method integer   getStatus()      Returns the current record's "status" value
 * @method GiftType  setGifttypeid()  Sets the current record's "gifttypeid" value
 * @method GiftType  setType()        Sets the current record's "type" value
 * @method GiftType  setValue()       Sets the current record's "value" value
 * @method GiftType  setDescription() Sets the current record's "description" value
 * @method GiftType  setCreatedtime() Sets the current record's "createdtime" value
 * @method GiftType  setExpiredtime() Sets the current record's "expiredtime" value
 * @method GiftType  setVolume()      Sets the current record's "volume" value
 * @method GiftType  setCode()        Sets the current record's "code" value
 * @method GiftType  setStatus()      Sets the current record's "status" value
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     diepth2
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGiftType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('gift_type');
        $this->hasColumn('gifttypeid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('value', 'float', 10, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('createdtime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('expiredtime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('volume', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('code', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('status', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}