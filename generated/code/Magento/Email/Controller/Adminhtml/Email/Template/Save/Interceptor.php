<?php
namespace Magento\Email\Controller\Adminhtml\Email\Template\Save;

/**
 * Interceptor class for @see \Magento\Email\Controller\Adminhtml\Email\Template\Save
 */
class Interceptor extends \Magento\Email\Controller\Adminhtml\Email\Template\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, ?\Magento\Framework\Stdlib\DateTime\DateTime $dateTime = null, ?\Magento\Email\Model\ResourceModel\Template $templateResource = null, ?\Magento\Backend\Model\Session $backendSession = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $dateTime, $templateResource, $backendSession);
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
