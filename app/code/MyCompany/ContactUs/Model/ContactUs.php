<?php
namespace MyCompany\ContactUs\Model;

use Magento\Framework\Model\AbstractModel;

class ContactUs extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('MyCompany\ContactUs\Model\ResourceModel\ContactUs');
    }
}