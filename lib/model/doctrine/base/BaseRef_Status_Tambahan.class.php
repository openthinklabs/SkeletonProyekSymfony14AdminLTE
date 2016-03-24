<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ref_Status_Tambahan', 'doctrine');

/**
 * BaseRef_Status_Tambahan
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $kode
 * @property string $status
 * @property boolean $memiliki_nilai
 * @property boolean $dilaksanakan_di_sekolah_yang_sama
 * 
 * @method integer             getId()                                Returns the current record's "id" value
 * @method string              getKode()                              Returns the current record's "kode" value
 * @method string              getStatus()                            Returns the current record's "status" value
 * @method boolean             getMemilikiNilai()                     Returns the current record's "memiliki_nilai" value
 * @method boolean             getDilaksanakanDiSekolahYangSama()     Returns the current record's "dilaksanakan_di_sekolah_yang_sama" value
 * @method Ref_Status_Tambahan setId()                                Sets the current record's "id" value
 * @method Ref_Status_Tambahan setKode()                              Sets the current record's "kode" value
 * @method Ref_Status_Tambahan setStatus()                            Sets the current record's "status" value
 * @method Ref_Status_Tambahan setMemilikiNilai()                     Sets the current record's "memiliki_nilai" value
 * @method Ref_Status_Tambahan setDilaksanakanDiSekolahYangSama()     Sets the current record's "dilaksanakan_di_sekolah_yang_sama" value
 * 
 * @package    snmptn_ppkb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRef_Status_Tambahan extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('Ref_Status_Tambahan');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('kode', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('status', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('memiliki_nilai', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
        $this->hasColumn('dilaksanakan_di_sekolah_yang_sama', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}