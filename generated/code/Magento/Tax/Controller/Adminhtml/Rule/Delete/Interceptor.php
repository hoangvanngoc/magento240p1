<?php
namespace Magento\Tax\Controller\Adminhtml\Rule\Delete;

/**
 * Interceptor class for @see \Magento\Tax\Controller\Adminhtml\Rule\Delete
 */
class Interceptor extends \Magento\Tax\Controller\Adminhtml\Rule\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Tax\Api\TaxRuleRepositoryInterface $ruleService, \Magento\Tax\Api\Data\TaxRuleInterfaceFactory $taxRuleDataObjectFactory)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $ruleService, $taxRuleDataObjectFactory);
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
