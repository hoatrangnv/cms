<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TransactionCard', 'doctrine');

/**
 * BaseTransactionCard
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $transactioncardid
 * @property string $cardnumber
 * @property string $cardserial
 * @property string $username
 * @property string $cardprovider
 * @property string $cp
 * @property integer $channel
 * @property integer $cardprice
 * @property integer $gameprice
 * @property string $resmsg
 * @property timestamp $transactiontime
 * @property integer $status
 * @property integer $userid
 * 
 * @method integer         getTransactioncardid() Returns the current record's "transactioncardid" value
 * @method string          getCardnumber()        Returns the current record's "cardnumber" value
 * @method string          getCardserial()        Returns the current record's "cardserial" value
 * @method string          getUsername()          Returns the current record's "username" value
 * @method string          getCardprovider()      Returns the current record's "cardprovider" value
 * @method string          getCp()                Returns the current record's "cp" value
 * @method integer         getChannel()           Returns the current record's "channel" value
 * @method integer         getCardprice()         Returns the current record's "cardprice" value
 * @method integer         getGameprice()         Returns the current record's "gameprice" value
 * @method string          getResmsg()            Returns the current record's "resmsg" value
 * @method timestamp       getTransactiontime()   Returns the current record's "transactiontime" value
 * @method integer         getStatus()            Returns the current record's "status" value
 * @method integer         getUserid()            Returns the current record's "userid" value
 * @method TransactionCard setTransactioncardid() Sets the current record's "transactioncardid" value
 * @method TransactionCard setCardnumber()        Sets the current record's "cardnumber" value
 * @method TransactionCard setCardserial()        Sets the current record's "cardserial" value
 * @method TransactionCard setUsername()          Sets the current record's "username" value
 * @method TransactionCard setCardprovider()      Sets the current record's "cardprovider" value
 * @method TransactionCard setCp()                Sets the current record's "cp" value
 * @method TransactionCard setChannel()           Sets the current record's "channel" value
 * @method TransactionCard setCardprice()         Sets the current record's "cardprice" value
 * @method TransactionCard setGameprice()         Sets the current record's "gameprice" value
 * @method TransactionCard setResmsg()            Sets the current record's "resmsg" value
 * @method TransactionCard setTransactiontime()   Sets the current record's "transactiontime" value
 * @method TransactionCard setStatus()            Sets the current record's "status" value
 * @method TransactionCard setUserid()            Sets the current record's "userid" value
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     diepth2
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTransactionCard extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('transaction_card');
        $this->hasColumn('transactioncardid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('cardnumber', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('cardserial', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('username', 'string', 75, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 75,
             ));
        $this->hasColumn('cardprovider', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('cp', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('channel', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('cardprice', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('gameprice', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('resmsg', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('transactiontime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('status', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
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
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}