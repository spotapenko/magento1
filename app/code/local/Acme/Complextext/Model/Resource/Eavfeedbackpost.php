<?php
class Acme_Complextext_Model_Resource_Eavfeedbackpost extends Mage_Eav_Model_Entity_Abstract{
    protected function _construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('complextext_eavfeedbackpost');
        $this->setConnection(
            $resource->getConnection('complextext_read'),
            $resource->getConnection('complextext_write')
        );
    }
}