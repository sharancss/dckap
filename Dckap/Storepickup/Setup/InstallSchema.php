<?php

/**
 * 
 * @category  Eleczo
 * @author    Sharan Sri Sai Chatlapalli
 * @copyright Mofosys © 2019
 * 
 */

namespace Dckap\Storepickup\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface {

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) {
        $installer = $setup;

        $installer->startSetup();

        $quote = 'quote';
        $orderTable = 'sales_order';

        $setup->getConnection()
                ->addColumn(
                        $setup->getTable($quote),
                        'storepickup_date',
                        [
                            'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                            'length' => 255,
                            'comment' => 'Store Pickup Date'
                        ]
        );
        //Order table
        $setup->getConnection()
                ->addColumn(
                        $setup->getTable($orderTable),
                        'storepickup_date',
                        [
                            'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                            'length' => 255,
                            'comment' => 'Store Pickup Date'
                        ]
        );
        $installer->endSetup();
    }
}
