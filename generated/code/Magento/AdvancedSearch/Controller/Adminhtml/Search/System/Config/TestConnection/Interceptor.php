<?php
namespace Magento\AdvancedSearch\Controller\Adminhtml\Search\System\Config\TestConnection;

/**
 * Interceptor class for @see \Magento\AdvancedSearch\Controller\Adminhtml\Search\System\Config\TestConnection
 */
class Interceptor extends \Magento\AdvancedSearch\Controller\Adminhtml\Search\System\Config\TestConnection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\AdvancedSearch\Model\Client\ClientResolver $clientResolver, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\Filter\StripTags $tagFilter)
    {
        $this->___init();
        parent::__construct($context, $clientResolver, $resultJsonFactory, $tagFilter);
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
