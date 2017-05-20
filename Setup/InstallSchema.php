<?php
/**
 * TestModuleSample plugin for Magento
 *
 * @package     Yireo_TestModuleSample
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

namespace Yireo\TestModuleSample\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Class InstallSchema
 *
 * @package Yireo\TestModuleSample\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * @param SchemaSetupInterface $installer
     * @param ModuleContextInterface $context
     */
    public function install(SchemaSetupInterface $installer, ModuleContextInterface $context)
    {
        $installer->startSetup();
        $connection = $installer->getConnection();
        $connection->getTables();

        $table = $connection->newTable(
            $installer->getTable('yireo_test_module_sample')
        )->addColumn(
            'name', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255, ['nullable' => false], 'Dummy Name'
        );

        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}