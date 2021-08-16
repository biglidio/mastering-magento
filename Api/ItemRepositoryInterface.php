<?php

namespace Biglidio\MasteringMagento\Api;

interface ItemRepositoryInterface
{
    /**
     * @return \Biglidio\MasteringMagento\Api\Data\ItemInterface[]
     */
    public function getList();
}
