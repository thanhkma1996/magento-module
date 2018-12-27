<?php
/**
 * Created by PhpStorm.
 * User: soldi
 * Date: 12/27/2018
 * Time: 8:43 AM
 */

namespace AHT\Blog\Block;
class Index extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context
                                $context)
    {
        parent::__construct($context);
    }
    public function getBlogInfo()
    {
        return __('AHT Blog module');
    }
    public function getPosts()
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        return $collection;
    }
}