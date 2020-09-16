<?php

namespace MyCompany\ContactUS\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer->getConnection()
            ->newTable($installer->getTable('contact_us'))
            ->addColumn('id', Table::TYPE_SMALLINT, null, ['identity' => true, 'nullable' => false, 'primary' => true])
            ->addColumn('name', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
            ->addColumn('email', Table::TYPE_TEXT, 255, ['nullable' => true, 'default' => null])
            ->addColumn('telephone', Table::TYPE_TEXT, 255, ['nullable' => false])
            ->addColumn('message', Table::TYPE_TEXT, 255, ['nullable' => false])
            ->setComment('Contact US');

        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }
}