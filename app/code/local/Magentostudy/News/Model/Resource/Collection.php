<?php
/**
 * Created by JetBrains PhpStorm.
 * User: stas
 * Date: 8/25/16
 * Time: 5:15 PM
 * To change this template use File | Settings | File Templates.
 */

/**
 * News collection
 *
 * @author Magento
 */
class Magentostudy_News_Model_Resource_News_Collection extends
    Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Define collection model
     */
    protected function _construct()
    {
        $this->_init('magentostudy_news/news');
    }
    /**
     * Prepare for displaying in list
     *
     * @param integer $page
     * @return Magentostudy_News_Model_Resource_News_Collection
     */
    public function prepareForList($page)
    {
        $this->setPageSize(Mage::helper('magentostudy_news')->getNewsPerPage());
        $this->setCurPage($page)->setOrder('published_at',
            Varien_Data_Collection::SORT_ORDER_DESC);
        return $this;
}
}