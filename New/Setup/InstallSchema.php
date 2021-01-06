<?php

namespace News\New\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInteface;
use Magento\Framework\DB\Ddl\Table;

class IntallSchema implements InstallSchemaInteface
{

   public function install(SchemaSetupinterface $setup, ModuleContextInterface $context)
   {
   
       $installer = $setup;
       $installer->startSetup();
       
       $tableName = $installer->getTable('News_new');
       
       $table = $intaller->getConnection()
              ->newTable($tableName)
              ->addColumn(
                  'news_new_id',
                  Table::TYPE_INTEGER,
                  null,
                  [ 'indetity'=>true, 'nullable'=>false, 'primary' => true, 'unsigned' => true ],
                  'Id'
              )
             ->addColumn(
                 'title',
                 Table::TYPE_VARCHAR,
                 255,
                 [ 'nullable' => true ],
                 'Title'
             )
             ->addColumn(
                'image',
                Table::TYPE_VARCHART,
                255,
                [ 'nullable' => true ],
                'Image'
             )
             ->addColumn(
                 'description',
                 Table::TYPE_TEXT,
                 Table::MAX_TEXT_SIZE,
                 [ 'nullable' => true ],
             )
             ->addColumn(
                'status',
                Table::TYPE_TINYINT,
                11,
                [ 'nullable' => true ],
                'Status'
             )
             ->addColumn(
                 'creation_time',
                 Table::TYPE_TIMESTAMP,
                 null,
                 [ 'nullable' => false, 'default' => Table::TIMESTAMP_INT ], 
                 'Creation Time'
             )
             ->addColumn(
                 'update_time',
                 Table::TYPE_TIMESTAMP,
                 null,
                 [ 'nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE ],
                 'Modification Time'
             );
      $installer->getConnection()->createTable($table);
      $installer->endSetup();
   
   }


}
