<?php
namespace AHT\CRUD\Controller\Index\Save;

/**
 * Interceptor class for @see \AHT\CRUD\Controller\Index\Save
 */
class Interceptor extends \AHT\CRUD\Controller\Index\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \AHT\CRUD\Model\PostFactory $postFactory, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool, \AHT\CRUD\Model\ResourceModel\PostFactory $saveFactory, \Magento\Framework\App\Request\Http $request, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\Session\SessionManagerInterface $coreSession)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $postFactory, $cacheTypeList, $cacheFrontendPool, $saveFactory, $request, $coreRegistry, $coreSession);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute();
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
