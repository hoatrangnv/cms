<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('History', 'doctrine');

/**
 * BaseHistory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $historyid
 * @property integer $userid
 * @property string $username
 * @property integer $cash
 * @property integer $currentcash
 * @property string $description
 * @property integer $gameid
 * @property integer $transactiontypeid
 * @property timestamp $time
 * @property integer $money
 * @property string $cp
 * @property string $title
 * @property integer $iscoin
 * @property integer $cardtype
 * @property string $shortcode
 * @property string $telco
 * @property integer $status
 * 
 * @method integer   getHistoryid()         Returns the current record's "historyid" value
 * @method integer   getUserid()            Returns the current record's "userid" value
 * @method string    getUsername()          Returns the current record's "username" value
 * @method integer   getCash()              Returns the current record's "cash" value
 * @method integer   getCurrentcash()       Returns the current record's "currentcash" value
 * @method string    getDescription()       Returns the current record's "description" value
 * @method integer   getGameid()            Returns the current record's "gameid" value
 * @method integer   getTransactiontypeid() Returns the current record's "transactiontypeid" value
 * @method timestamp getTime()              Returns the current record's "time" value
 * @method integer   getMoney()             Returns the current record's "money" value
 * @method string    getCp()                Returns the current record's "cp" value
 * @method string    getTitle()             Returns the current record's "title" value
 * @method integer   getIscoin()            Returns the current record's "iscoin" value
 * @method integer   getCardtype()          Returns the current record's "cardtype" value
 * @method string    getShortcode()         Returns the current record's "shortcode" value
 * @method string    getTelco()             Returns the current record's "telco" value
 * @method integer   getStatus()            Returns the current record's "status" value
 * @method History   setHistoryid()         Sets the current record's "historyid" value
 * @method History   setUserid()            Sets the current record's "userid" value
 * @method History   setUsername()          Sets the current record's "username" value
 * @method History   setCash()              Sets the current record's "cash" value
 * @method History   setCurrentcash()       Sets the current record's "currentcash" value
 * @method History   setDescription()       Sets the current record's "description" value
 * @method History   setGameid()            Sets the current record's "gameid" value
 * @method History   setTransactiontypeid() Sets the current record's "transactiontypeid" value
 * @method History   setTime()              Sets the current record's "time" value
 * @method History   setMoney()             Sets the current record's "money" value
 * @method History   setCp()                Sets the current record's "cp" value
 * @method History   setTitle()             Sets the current record's "title" value
 * @method History   setIscoin()            Sets the current record's "iscoin" value
 * @method History   setCardtype()          Sets the current record's "cardtype" value
 * @method History   setShortcode()         Sets the current record's "shortcode" value
 * @method History   setTelco()             Sets the current record's "telco" value
 * @method History   setStatus()            Sets the current record's "status" value
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     diepth2
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHistory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('history');
        $this->hasColumn('historyid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('userid', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('username', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 75,
             ));
        $this->hasColumn('cash', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('currentcash', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('description', 'string', 6000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 6000,
             ));
        $this->hasColumn('gameid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('transactiontypeid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
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
        $this->hasColumn('money', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('cp', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('title', 'string', 1000, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1000,
             ));
        $this->hasColumn('iscoin', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('cardtype', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('shortcode', 'string', 4, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('telco', 'string', 5, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 5,
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