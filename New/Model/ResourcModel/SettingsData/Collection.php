<?php

namespace News\New\ResourceModel\SettingsData;

use Magento\Framewok\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
 
    Protected function _construct()
    {
       $this->_init('News\New\Model\SettingsData', 'News\New\Model\ResourceModel\SettingsData')
    }


}
