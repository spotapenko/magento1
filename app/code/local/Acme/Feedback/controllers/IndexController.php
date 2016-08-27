 <?php
 /**
 * News frontend controller
 *
 * @author Magento
 */
class Acme_Feedback_IndexController extends Mage_Core_Controller_Front_Action
{
    
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function paramAction() {
        echo 'Goodbye World!';
        $newsId = $this->getRequest()->getParam('id');
        echo $newsId;
    }
}