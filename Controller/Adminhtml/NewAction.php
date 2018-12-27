<?php
/**
 * Created by PhpStorm.
 * User: soldi
 * Date: 12/27/2018
 * Time: 9:19 AM
 */
namespace AHT\Blog\Controller\Adminhtml\Post;

class NewAction extends \AHT\Blog\Controller\Adminhtml\Post
{
    public function execute()
    {
        $this->_forward('edit');
    }
}
