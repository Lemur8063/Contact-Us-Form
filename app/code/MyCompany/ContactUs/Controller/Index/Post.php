<?php
namespace MyCompany\ContactUs\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use MyCompany\ContactUs\Model\ContactUsFactory;
use MyCompany\ContactUs\Model\ContactUs;


class Post extends Action
{
    protected $resultPageFactory;

    protected $contactUsFactory;

    protected $contactUS;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        ContactUsFactory $contactUsFactory,
        ContactUs $contactUs
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->contactUsFactory = $contactUsFactory;
        $this->contactUS = $contactUs;
        parent::__construct($context);
    }

    public function execute()
    {
            $resultRedirect = $this->resultRedirectFactory->create();
            $request = $this->getRequest()->getParams();
            $name = $request['name'];
            $email = $request['email'];
            $telephone = $request['telephone'];
            $message = $request['message'];
            $contactUS = $this->contactUsFactory->create();
            $contactUS->setName($name);
            $contactUS->setEmail($email);
            $contactUS->setTelephone($telephone);
            $contactUS->setMessage($message);
            $contactUS->save();
            $this->resultPageFactory->create();
            return $resultRedirect->setPath('contact_us');

    }

}