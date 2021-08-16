<?php

namespace Biglidio\MasteringMagento\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{

    /**
     * {@inheritdoc} 
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        
        if (version_compare($context->getVersion(), '1.0.1', '<')) {
            $setup->getConnection()->update(
                $setup->getTable('biglidio_mastering_magento_item'),
                [
                    'description' => 'Default description'
                ],
                $setup->getConnection()->quoteInto('id = ?', 1)
            );
        }

        $setup->endSetup();
    }
}
