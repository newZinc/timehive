<?php

/**
 * BaseProjectUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $project_id
 * @property integer $user_id
 * @property integer $role_id
 * @property Project $Project
 * @property Role $Role
 * 
 * @method integer     getProjectId()  Returns the current record's "project_id" value
 * @method integer     getUserId()     Returns the current record's "user_id" value
 * @method integer     getRoleId()     Returns the current record's "role_id" value
 * @method Project     getProject()    Returns the current record's "Project" value
 * @method Role        getRole()       Returns the current record's "Role" value
 * @method ProjectUser setProjectId()  Sets the current record's "project_id" value
 * @method ProjectUser setUserId()     Sets the current record's "user_id" value
 * @method ProjectUser setRoleId()     Sets the current record's "role_id" value
 * @method ProjectUser setProject()    Sets the current record's "Project" value
 * @method ProjectUser setRole()       Sets the current record's "Role" value
 * 
 * @package    timeboxx
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProjectUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tb_project_user');
        $this->hasColumn('project_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('user_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('role_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Project', array(
             'local' => 'project_id',
             'foreign' => 'id'));

        $this->hasOne('Role', array(
             'local' => 'role_id',
             'foreign' => 'id'));
    }
}