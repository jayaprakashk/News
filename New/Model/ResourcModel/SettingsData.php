<?php

namespace News\New\Modle\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class SettingsData extends AbstractDb
{

  protected function _construct()
  {
    $this->_init('news_new','news_new_id');
  }

}
