 <?php
 /**
 * News frontend controller
 *
 * @author Magento
 */
class Acme_Complextext_IndexController extends Mage_Core_Controller_Front_Action
{
    
    /**
     * Index action
     */
    public function indexAction()
    {
        echo 'ComplexText!';
        $weblog2 = Mage::getModel('complextext/eavfeedbackpost');
       // $weblog2->load(1);
        var_dump($weblog2);
    }

}