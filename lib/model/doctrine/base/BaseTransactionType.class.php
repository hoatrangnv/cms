<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TransactionType', 'doctrine');

/**
 * BaseTransactionType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $transactiontypeid
 * @property string $type
 * @property string $code
 * 
 * @method integer         getTransactiontypeid() Returns the current record's "transactiontypeid" value
 * @method string          getType()              Returns the current record's "type" value
 * @method string          getCode()              Returns the current record's "code" value
 * @method TransactionType setTransactiontypeid() Sets the current record's "transactiontypeid" value
 * @method TransactionType setType()              Sets the current record's "type" value
 * @method TransactionType setCode()              Sets the current record's "code" value
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     diepth2
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTransactionType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('transaction_type');
        $this->hasColumn('transactiontypeid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('type', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 40,
             ));
        $this->hasColumn('code', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 40,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}