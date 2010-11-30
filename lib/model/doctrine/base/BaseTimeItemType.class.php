<?php

/**
 * BaseTimeItemType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property integer $account_id
 * @property timestamp $deleted_at
 * @property Account $Account
 * @property Doctrine_Collection $TimeLogItem
 * 
 * @method string              getName()        Returns the current record's "name" value
 * @method integer             getAccountId()   Returns the current record's "account_id" value
 * @method timestamp           getDeletedAt()   Returns the current record's "deleted_at" value
 * @method Account             getAccount()     Returns the current record's "Account" value
 * @method Doctrine_Collection getTimeLogItem() Returns the current record's "TimeLogItem" collection
 * @method TimeItemType        setName()        Sets the current record's "name" value
 * @method TimeItemType        setAccountId()   Sets the current record's "account_id" value
 * @method TimeItemType        setDeletedAt()   Sets the current record's "deleted_at" value
 * @method TimeItemType        setAccount()     Sets the current record's "Account" value
 * @method TimeItemType        setTimeLogItem() Sets the current record's "TimeLogItem" collection
 * 
 * @package    timeboxx
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTimeItemType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tb_timeitem_type');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('account_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('deleted_at', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Account', array(
             'local' => 'account_id',
             'foreign' => 'id'));

        $this->hasMany('TimeLogItem', array(
             'local' => 'id',
             'foreign' => 'type_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}