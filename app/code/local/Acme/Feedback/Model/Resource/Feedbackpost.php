<?php
class Acme_Feedback_Model_Resource_Feedbackpost extends Mage_Core_Model_Resource_Db_Abstract{
    protected function _construct()
    {
        $this->_init('feedback/feedbackpost', 'feedbackpost_id');
    }
}