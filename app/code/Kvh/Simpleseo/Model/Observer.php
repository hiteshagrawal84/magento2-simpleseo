<?php

namespace Kvh\Simpleseo\Model;
class Observer
{
    protected $_verpageData;
    protected $_registry = null;
 
    public function __construct (      
        \Magento\Framework\Registry $registry
    ) { 
            $this->_registry = $registry;
    }
 
    public function changemeta(\Magento\Framework\Event\Observer $observer)
    {  
        echo "Here";exit;
    }
 
    
}