<?php

/**
 * BaseExample
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property string $lead
 * @property string $contents
 * 
 * @method integer getId()       Returns the current record's "id" value
 * @method string  getTitle()    Returns the current record's "title" value
 * @method string  getLead()     Returns the current record's "lead" value
 * @method string  getContents() Returns the current record's "contents" value
 * @method Example setId()       Sets the current record's "id" value
 * @method Example setTitle()    Sets the current record's "title" value
 * @method Example setLead()     Sets the current record's "lead" value
 * @method Example setContents() Sets the current record's "contents" value
 * 
 * @package    symfony-1-4-social-startup
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseExample extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('example');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('title', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('lead', 'string', 4096, array(
             'type' => 'string',
             'length' => 4096,
             ));
        $this->hasColumn('contents', 'string', 4096, array(
             'type' => 'string',
             'length' => 4096,
             ));

        $this->option('orderBy', 'title');
        $this->option('collate', 'utf8_polish_ci');
        $this->option('charset', 'utf8');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $signable0 = new Doctrine_Template_Signable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => true,
             'fields' => 
             array(
              0 => 'title',
             ),
             'canUpdate' => false,
             ));
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($signable0);
        $this->actAs($sluggable0);
        $this->actAs($timestampable0);
    }
}