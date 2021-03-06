<?php
namespace Magento\CurrencySymbol\Controller\Adminhtml\System\Currency\FetchRates;

/**
 * Interceptor class for @see \Magento\CurrencySymbol\Controller\Adminhtml\System\Currency\FetchRates
 */
class Interceptor extends \Magento\CurrencySymbol\Controller\Adminhtml\System\Currency\FetchRates implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, ?\Magento\Backend\Model\Session $backendSession = null, ?\Magento\Directory\Model\Currency\Import\Factory $currencyImportFactory = null, ?\Magento\Framework\Escaper $escaper = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $backendSession, $currencyImportFactory, $escaper);
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
