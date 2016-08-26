<?php
/**
 * Created by JetBrains PhpStorm.
 * User: stas
 * Date: 8/25/16
 * Time: 5:15 PM
 * To change this template use File | Settings | File Templates.
 */

/**
 * News item resource model
 *
 * @author Magento
 */
class Magentostudy_News_Model_Resource_News extends
    Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Initialize connection and define main table and primary key
     */
    protected function _construct()
    {
        $this->_init('magentostudy_news/news', 'news_id');
    }
}