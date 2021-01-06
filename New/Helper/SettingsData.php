<?php

namespace News\New\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\Escaper;

use News\New\Model\SettingsDataFactory;

class SettingsData extends AbstractHelper
{
   protected $escaper;
   
   protected settingsDataFactory;
   
   public function __construct(Context $context, Escaper $escaper, SettingsDataFactory $settingsDataFactory){
   
       $this->escaper = escaper;
       $this->settingsDataFactory = settingsDataFactory;
       parent::__construct($context);
   }
   
   public function getTitle(){
    
       $settings=$this->setingsDataFactory-create();
       $this-settingsData = $settings->load(1);
       return $this->escaper->escapeHtml(
          $this->settingsData->getTitle()
       ); 
   }
   
   public function getImage(){
   
      $settings = $this->settingsDataFactory->create();
      $this->settingsData = $settings->load(1);
       return $this->settingsData->getImage();
   }
   
   public function getDescription(){
      
       $settings = $this->settingsDataFactory->create();
       $this->settingData->$settings->load(1);
       return $this->settings->getDescription();
   }
   
   public function getStatus(){
   
       $settings = $this->settngsDataFactory->create();
       $this->settingsData = $settings->load(1);
        return $this->settingsData->getStaatus();
   }
   

}
