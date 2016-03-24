<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Data_Perubahan_NPSN', 'doctrine');

/**
 * BaseData_Perubahan_NPSN
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $npsn_2015
 * @property integer $npsn_2016
 * @property string $nama_2015
 * @property string $nama_2016
 * 
 * @method integer             getId()        Returns the current record's "id" value
 * @method integer             getNpsn2015()  Returns the current record's "npsn_2015" value
 * @method integer             getNpsn2016()  Returns the current record's "npsn_2016" value
 * @method string              getNama2015()  Returns the current record's "nama_2015" value
 * @method string              getNama2016()  Returns the current record's "nama_2016" value
 * @method Data_Perubahan_NPSN setId()        Sets the current record's "id" value
 * @method Data_Perubahan_NPSN setNpsn2015()  Sets the current record's "npsn_2015" value
 * @method Data_Perubahan_NPSN setNpsn2016()  Sets the current record's "npsn_2016" value
 * @method Data_Perubahan_NPSN setNama2015()  Sets the current record's "nama_2015" value
 * @method Data_Perubahan_NPSN setNama2016()  Sets the current record's "nama_2016" value
 * 
 * @package    snmptn_ppkb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseData_Perubahan_NPSN extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('Data_Perubahan_NPSN');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('npsn_2015', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 8,
             ));
        $this->hasColumn('npsn_2016', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 8,
             ));
        $this->hasColumn('nama_2015', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('nama_2016', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}