<?php
class Acme_Feedback_Block_List extends Mage_Core_Block_Template
{
    public function getAllPosts() {
        $posts = Mage::getModel('feedback/feedbackpost')->getCollection();
  return $posts;
    }
}