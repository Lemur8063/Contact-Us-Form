<?php

namespace MyCompany\ContactUs\Model\ResourceModel\ContactUs;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection

    {

    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(
        	'MyCompany\ContactUs\Model\ContactUs',
        	'MyCompany\ContactUs\Model\ResourceModel\ContactUs');
        $this->_map['fields']['id'] = 'contact_us.id';
    }
}