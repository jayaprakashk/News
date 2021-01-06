<?php 

namespace News\New\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class SettingsData extends AbstractModel implements SettingsDataInterface, IndentityInterface
{

     const CACHE_NEW = 'news_new';
     
     protect function _construct()
     {
        $this->_init('News\New\Model\ReourceModel\SettingsData');
     }
     
     public function getIdentities()
     {
         return [self::CACHE_TAG . '_'. $this->getId()];
     }

}
