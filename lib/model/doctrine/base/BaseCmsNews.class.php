<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CmsNews', 'doctrine');

/**
 * BaseCmsNews
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $newid
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $photo
 * @property timestamp $createdtime
 * @property integer $categoryid
 * @property string $author
 * @property integer $views
 * @property integer $spotlight
 * @property timestamp $modifiedtime
 * @property integer $order
 * @property integer $slider
 * @property string $website
 * @property integer $ispopup
 * @property integer $status
 * 
 * @method integer   getNewid()        Returns the current record's "newid" value
 * @method string    getTitle()        Returns the current record's "title" value
 * @method string    getDescription()  Returns the current record's "description" value
 * @method string    getContent()      Returns the current record's "content" value
 * @method string    getPhoto()        Returns the current record's "photo" value
 * @method timestamp getCreatedtime()  Returns the current record's "createdtime" value
 * @method integer   getCategoryid()   Returns the current record's "categoryid" value
 * @method string    getAuthor()       Returns the current record's "author" value
 * @method integer   getViews()        Returns the current record's "views" value
 * @method integer   getSpotlight()    Returns the current record's "spotlight" value
 * @method timestamp getModifiedtime() Returns the current record's "modifiedtime" value
 * @method integer   getOrder()        Returns the current record's "order" value
 * @method integer   getSlider()       Returns the current record's "slider" value
 * @method string    getWebsite()      Returns the current record's "website" value
 * @method integer   getIspopup()      Returns the current record's "ispopup" value
 * @method integer   getStatus()       Returns the current record's "status" value
 * @method CmsNews   setNewid()        Sets the current record's "newid" value
 * @method CmsNews   setTitle()        Sets the current record's "title" value
 * @method CmsNews   setDescription()  Sets the current record's "description" value
 * @method CmsNews   setContent()      Sets the current record's "content" value
 * @method CmsNews   setPhoto()        Sets the current record's "photo" value
 * @method CmsNews   setCreatedtime()  Sets the current record's "createdtime" value
 * @method CmsNews   setCategoryid()   Sets the current record's "categoryid" value
 * @method CmsNews   setAuthor()       Sets the current record's "author" value
 * @method CmsNews   setViews()        Sets the current record's "views" value
 * @method CmsNews   setSpotlight()    Sets the current record's "spotlight" value
 * @method CmsNews   setModifiedtime() Sets the current record's "modifiedtime" value
 * @method CmsNews   setOrder()        Sets the current record's "order" value
 * @method CmsNews   setSlider()       Sets the current record's "slider" value
 * @method CmsNews   setWebsite()      Sets the current record's "website" value
 * @method CmsNews   setIspopup()      Sets the current record's "ispopup" value
 * @method CmsNews   setStatus()       Sets the current record's "status" value
 * 
 * @package    Vt_Portals
 * @subpackage model
 * @author     ngoctv1
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCmsNews extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cms_news');
        $this->hasColumn('newid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('title', 'string', 500, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 500,
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('content', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('photo', 'string', 255, array(
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
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('categoryid', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('author', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('views', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('spotlight', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('modifiedtime', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('order', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('slider', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('website', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('ispopup', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('status', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}