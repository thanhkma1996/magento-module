<?php
/**
 * Created by PhpStorm.
 * User: soldi
 * Date: 12/27/2018
 * Time: 9:11 AM
 */

namespace AHT\Blog\Controller\Adminhtml\Post;

class Index extends \AHT\Blog\Controller\Adminhtml\Post
{

    public function execute()
    {
        $this->_initAction();
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Posts'));
        $this->_view->renderLayout();
    }

}
