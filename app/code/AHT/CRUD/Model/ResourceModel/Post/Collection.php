<?php
namespace AHT\CRUD\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
        /**
         * Define resource model
         *
         * @return void
         */
        protected function _construct()
        {
                $this->_init('AHT\CRUD\Model\Post', 'AHT\CRUD\Model\ResourceModel\Post');
        }
}
