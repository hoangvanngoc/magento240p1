<?php
namespace AHT\CRUD\Controller\Index;

class Delete extends \Magento\Framework\App\Action\Action
{
     protected $_pageFactory;
     protected $_request;
     protected $_postFactory;

     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Magento\Framework\App\Request\Http $request,
          \AHT\CRUD\Model\PostFactory $postFactory,
          \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList,
          \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool
          )
     {
          $this->_pageFactory = $pageFactory;
          $this->_request = $request;
          $this->_postFactory = $postFactory;
          $this->_cacheTypeList = $cacheTypeList;
          $this->_cacheFrontendPool = $cacheFrontendPool;
          return parent::__construct($context);
     }

     public function execute()
     {
            $id = $this->_request->getParam('id');
          $post = $this->_postFactory->create();
          $result = $post->setId($id);
          $result = $result->delete();

          $types = array('config','layout','block_html','collections','reflection','db_ddl','eav','config_integration','config_integration_api','full_page','translate','config_webservice');
               foreach ($types as $type) {
                    $this->_cacheTypeList->cleanType($type);
               }
               foreach ($this->_cacheFrontendPool as $cacheFrontend) {
                    $cacheFrontend->getBackend()->clean();
               }
        //   flushCache();
          return $this->_redirect('crud/index/index');
     }
}
