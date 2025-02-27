<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version13 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('example', 'example_created_by_sf_guard_user_id', array(
             'name' => 'example_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('example', 'example_updated_by_sf_guard_user_id', array(
             'name' => 'example_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('hint', 'hint_created_by_sf_guard_user_id', array(
             'name' => 'hint_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('hint', 'hint_updated_by_sf_guard_user_id', array(
             'name' => 'hint_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('project', 'project_created_by_sf_guard_user_id', array(
             'name' => 'project_created_by_sf_guard_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->createForeignKey('project', 'project_updated_by_sf_guard_user_id', array(
             'name' => 'project_updated_by_sf_guard_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('example', 'example_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('example', 'example_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('hint', 'hint_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('hint', 'hint_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->addIndex('project', 'project_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->addIndex('project', 'project_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('example', 'example_created_by_sf_guard_user_id');
        $this->dropForeignKey('example', 'example_updated_by_sf_guard_user_id');
        $this->dropForeignKey('hint', 'hint_created_by_sf_guard_user_id');
        $this->dropForeignKey('hint', 'hint_updated_by_sf_guard_user_id');
        $this->dropForeignKey('project', 'project_created_by_sf_guard_user_id');
        $this->dropForeignKey('project', 'project_updated_by_sf_guard_user_id');
        $this->removeIndex('example', 'example_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('example', 'example_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('hint', 'hint_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('hint', 'hint_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
        $this->removeIndex('project', 'project_created_by', array(
             'fields' => 
             array(
              0 => 'created_by',
             ),
             ));
        $this->removeIndex('project', 'project_updated_by', array(
             'fields' => 
             array(
              0 => 'updated_by',
             ),
             ));
    }
}