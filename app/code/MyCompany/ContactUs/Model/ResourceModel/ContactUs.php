<?php
namespace MyCompany\ContactUs\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ContactUs extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('contact_us', 'id');
        $this->_isPkAutoIncrement = false;
    }
}