<?php

namespace Biglidio\MasteringMagento\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel 
{
    protected function _construct()
    {
        $this->_init(\Biglidio\MasteringMagento\Model\ResourceModel\Item::class);
    }
}