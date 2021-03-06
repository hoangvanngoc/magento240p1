<?php
namespace Magento\Paypal\Controller\Adminhtml\Transparent\Redirect;

/**
 * Interceptor class for @see \Magento\Paypal\Controller\Adminhtml\Transparent\Redirect
 */
class Interceptor extends \Magento\Paypal\Controller\Adminhtml\Transparent\Redirect implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Paypal\Model\Payflow\Transparent $transparent, \Magento\Payment\Model\Method\Logger $logger)
    {
        $this->___init();
        parent::__construct($context, $resultLayoutFactory, $transparent, $logger);
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
