<?php

namespace Biglidio\MasteringMagento\Block;

use Magento\Framework\View\Element\Template;
use Biglidio\MasteringMagento\Model\ResourceModel\Item\Collection;
use Biglidio\MasteringMagento\Model\ResourceModel\Item\CollectionFactory;

class Hello extends Template
{
    private $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    )
    {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return \Biglidio\MasteringMagento\Model\Item[]
     */
    public function getItems()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
