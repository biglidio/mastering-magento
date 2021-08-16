<?php

namespace Biglidio\MasteringMagento\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('biglidio_mastering_magento_item', 'id');
    }
}