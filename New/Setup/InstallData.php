<?php

namespace News\New\Setup;

use Magento\Framework\Setup\InstallInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magnto\Framework\Setup\ModuleContextInterface;

use News\New\Model\SettingDataFactory;
use News\New\Helper\SettingsData'

class InstallData implements InstallDataInterface
{
  protected $settingsDataFactory;
  
  protected $settingsHelper;
  
  
  public function __construct(SettingsDataFactory $settingsDataFactory, SettingsData $settingsHelper)
  {
      $settings settingsDataFactory = $settingsDataFactory;
      $this->settingsHelper = $settingsHelper;
  }
  public fucntion intall(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
  {
    $settings = $this->settingsDataFactory-create();
    
    $settings->setTitle('');
    $settings->setImage('');
    $settings->setDescription('');
    $settings->setStatus('');
    
    $settings->save();
  }


}
