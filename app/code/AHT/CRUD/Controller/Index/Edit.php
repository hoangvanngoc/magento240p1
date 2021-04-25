<?php
namespace AHT\CRUD\Controller\Index;

class Edit extends \Magento\Framework\App\Action\Action
{
     protected $_pageFactory;
     protected $_request;
     protected $_coreRegistry;
     protected $_coreSession;

     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Magento\Framework\App\Request\Http $request,
          \Magento\Framework\Registry $coreRegistry,
          \Magento\Framework\Session\SessionManagerInterface $coreSession
          )
     {
          $this->_request = $request;
          $this->_coreRegistry = $coreRegistry;
          $this->_coreSession = $coreSession;
          $this->_pageFactory = $pageFactory;
          return parent::__construct($context);
     }

     public function execute()
     {
          $id = $this->_request->getParam('id');
          $this->_coreRegistry->register('editRecordId', $id);
          $this->_coreSession->start();
          $this->_coreSession->setId($id);

          return $this->_pageFactory->create();
     }
}
