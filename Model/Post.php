<?php
/**
 * Created by PhpStorm.
 * User: soldi
 * Date: 12/27/2018
 * Time: 8:55 AM
 */
namespace AHT\Blog\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'aht_blog_post';

    protected $_cacheTag = 'aht_blog_post';

    protected $_eventPrefix = 'aht_blog_post';

    protected function _construct()
    {
        $this->_init('AHT\Blog\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
