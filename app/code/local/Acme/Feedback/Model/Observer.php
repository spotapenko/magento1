<?php
/**
 * News module observer
 * @author Magento
 */
class Acme_Feedback_Model_Observer
{
    /**
     * Event before show news item on frontend
     * If specified new post was added recently (term is defined in config)
    we'll see message about this on frontend.
     *
     * @param Varien_Event_Observer $observer
     */
    public function testListener(Varien_Event_Observer $observer)
    {
        var_dump('stas observe acme testListener');
    }
}