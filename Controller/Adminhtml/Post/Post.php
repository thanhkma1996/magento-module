<?php
/**
 * Created by PhpStorm.
 * User: soldi
 * Date: 12/27/2018
 * Time: 9:14 AM
 */
namespace AHT\Blog\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{

    protected function _construct()
    {
        $this->_controller = 'adminhtml_post';
        $this->_blockGroup = 'AHT_Blog';
        $this->_headerText = __('Posts');
        $this->_addButtonLabel = __('Create New Post');
        parent::_construct();
    }
}
