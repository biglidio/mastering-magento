<?php

namespace Biglidio\MasteringMagento\Model;

use Biglidio\MasteringMagento\Api\ItemRepositoryInterface;
use Biglidio\MasteringMagento\Model\ResourceModel\Item\CollectionFactory;

class ItemRepository implements ItemRepositoryInterface
{
    private $collectionFactory;
    
    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
