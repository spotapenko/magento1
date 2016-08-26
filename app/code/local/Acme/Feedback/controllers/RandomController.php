 <?php
 /**
 * News frontend controller
 *
 * @author Magento
 */
class Acme_Random_IndexController extends Mage_Core_Controller_Front_Action
{
    
    /**
     * Index action
     */
    public function indexAction()
    {
        var_dump('Stas test Refactor!');

    }

    public function goodbyeAction() {
        echo 'Goodbye World Random!';
    }
}