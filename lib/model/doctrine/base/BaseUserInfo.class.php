<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('UserInfo', 'doctrine');

/**
 * BaseUserInfo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $userid
 * @property string $username
 * @property integer $isonline
 * @property integer $clientid
 * @property string $ip
 * @property string $device
 * @property string $screen
 * @property integer $currentgameid
 * @property integer $experience
 * @property integer $totalmatch
 * @property integer $totalwin
 * @property integer $playedgame
 * @property timestamp $startplayedtime
 * @property string $cp
 * @property string $deviceidentify
 * @property integer $gold
 * @property integer $cash
 * @property integer $level
 * @property integer $medal
 * @property integer $trustedindex
 * @property integer $avatarid
 * @property integer $autoready
 * @property integer $autodenyinvitation
 * @property timestamp $lastlogintime
 * @property Medal $Medal
 * @property Level $Level
 * @property User $User
 * @property ClientType $ClientType
 * @property Partner $Partner
 * @property Doctrine_Collection $MoneyLogs
 * 
 * @method integer             getUserid()             Returns the current record's "userid" value
 * @method string              getUsername()           Returns the current record's "username" value
 * @method integer             getIsonline()           Returns the current record's "isonline" value
 * @method integer             getClientid()           Returns the current record's "clientid" value
 * @method string              getIp()                 Returns the current record's "ip" value
 * @method string              getDevice()             Returns the current record's "device" value
 * @method string              getScreen()             Returns the current record's "screen" value
 * @method integer             getCurrentgameid()      Returns the current record's "currentgameid" value
 * @method integer             getExperience()         Returns the current record's "experience" value
 * @method integer             getTotalmatch()         Returns the current record's "totalmatch" value
 * @method integer             getTotalwin()           Returns the current record's "totalwin" value
 * @method integer             getPlayedgame()         Returns the current record's "playedgame" value
 * @method timestamp           getStartplayedtime()    Returns the current record's "startplayedtime" value
 * @method string              getCp()                 Returns the current record's "cp" value
 * @method string              getDeviceidentify()     Returns the current record's "deviceidentify" value
 * @method integer             getGold()               Returns the current record's "gold" value
 * @method integer             getCash()               Returns the current record's "cash" value
 * @method integer             getLevel()              Returns the current record's "level" value
 * @method integer             getMedal()              Returns the current record's "medal" value
 * @method integer             getTrustedindex()       Returns the current record's "trustedindex" value
 * @method integer             getAvatarid()           Returns the current record's "avatarid" value
 * @method integer             getAutoready()          Returns the current record's "autoready" value
 * @method integer             getAutodenyinvitation() Returns the current record's "autodenyinvitation" value
 * @method timestamp           getLastlogintime()      Returns the current record's "lastlogintime" value
 * @method Medal               getMedal()              Returns the current record's "Medal" value
 * @method Level               getLevel()              Returns the current record's "Level" value
 * @method User                getUser()               Returns the current record's "User" value
 * @method ClientType          getClientType()         Returns the current record's "ClientType" value
 * @method Partner             getPartner()            Returns the current record's "Partner" value
 * @method Doctrine_Collection getMoneyLogs()          Returns the current record's "MoneyLogs" collection
 * @method UserInfo            setUserid()             Sets the current record's "userid" value
 * @method UserInfo            setUsername()           Sets the current record's "username" value
 * @method UserInfo            setIsonline()           Sets the current record's "isonline" value
 * @method UserInfo            setClientid()           Sets the current record's "clientid" value
 * @method UserInfo            setIp()                 Sets the current record's "ip" value
 * @method UserInfo            setDevice()             Sets the current record's "device" value
 * @method UserInfo            setScreen()             Sets the current record's "screen" value
 * @method UserInfo            setCurrentgameid()      Sets the current record's "currentgameid" value
 * @method UserInfo            setExperience()         Sets the current record's "experience" value
 * @method UserInfo            setTotalmatch()         Sets the current record's "totalmatch" value
 * @method UserInfo            setTotalwin()           Sets the current record's "totalwin" value
 * @method UserInfo            setPlayedgame()         Sets the current record's "playedgame" value
 * @method UserInfo            setStartplayedtime()    Sets the current record's "startplayedtime" value
 * @method UserInfo            setCp()                 Sets the current record's "cp" value
 * @method UserInfo            setDeviceidentify()     Sets the current record's "deviceidentify" value
 * @method UserInfo            setGold()               Sets the current record's "gold" value
 * @method UserInfo            setCash()               Sets the current record's "cash" value
 * @method UserInfo            setLevel()              Sets the current record's "level" value
 * @method UserInfo            setMedal()              Sets the current record's "medal" value
 * @method UserInfo            setTrustedindex()       Sets the current record's "trustedindex" value
 * @method UserInfo            setAvatarid()           Sets the current record's "avatarid" value
 * @method UserInfo            setAutoready()          Sets the current record's "autoready" value
 * @method UserInfo            setAutodenyinvitation() Sets the current record's "autodenyinvitation" value
 * @method UserInfo            setLastlogintime()      Sets the current record's "lastlogintime" value
 * @method UserInfo            setMedal()              Sets the current record's "Medal" value
 * @method UserInfo            setLevel()              Sets the current record's "Level" value
 * @method UserInfo            setUser()               Sets the current record's "User" value
 * @method UserInfo            setClientType()         Sets the current record's "ClientType" value
 * @method UserInfo            setPartner()            Sets the current record's "Partner" value
 * @method UserInfo            setMoneyLogs()          Sets the current record's "MoneyLogs" collection
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     diepth2
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserInfo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_info');
        $this->hasColumn('userid', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('username', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('isonline', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('clientid', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('ip', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('device', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('screen', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('currentgameid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('experience', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('totalmatch', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('totalwin', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('playedgame', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('startplayedtime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '2012-07-30 11:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('cp', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('deviceidentify', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('gold', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('cash', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('level', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('medal', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('trustedindex', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('avatarid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('autoready', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('autodenyinvitation', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('lastlogintime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Medal', array(
             'local' => 'medal',
             'foreign' => 'medal'));

        $this->hasOne('Level', array(
             'local' => 'level',
             'foreign' => 'level'));

        $this->hasOne('User', array(
             'local' => 'userId',
             'foreign' => 'userId'));

        $this->hasOne('ClientType', array(
             'local' => 'clientId',
             'foreign' => 'ClientId'));

        $this->hasOne('Partner', array(
             'local' => 'cp',
             'foreign' => 'partnerId'));

        $this->hasMany('MoneyLog as MoneyLogs', array(
             'local' => 'userId',
             'foreign' => 'userId'));
    }
}