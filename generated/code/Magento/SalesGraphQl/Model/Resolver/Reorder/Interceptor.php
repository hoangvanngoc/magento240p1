<?php
namespace Magento\SalesGraphQl\Model\Resolver\Reorder;

/**
 * Interceptor class for @see \Magento\SalesGraphQl\Model\Resolver\Reorder
 */
class Interceptor extends \Magento\SalesGraphQl\Model\Resolver\Reorder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\Reorder\Reorder $reorder, \Magento\Sales\Model\OrderFactory $orderFactory)
    {
        $this->___init();
        parent::__construct($reorder, $orderFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        if (!$pluginInfo) {
            return parent::resolve($field, $context, $info, $value, $args);
        } else {
            return $this->___callPlugins('resolve', func_get_args(), $pluginInfo);
        }
    }
}
