<?php
class Acme_Feedback_Model_Resource_Feedbackpost_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {
    protected function _construct()
    {
        $this->_init('feedback/feedbackpost');
    }
}