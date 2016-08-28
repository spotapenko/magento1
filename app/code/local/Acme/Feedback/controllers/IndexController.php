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
          return $this->showAllFeedbackPostsAction();
    }

    //renamed paramAction
    //http://magento1.localhost/feedback/index/post/?id=1
    public function postAction() {
       // $this->loadLayout();
        $params = $this->getRequest()->getParams();
        if (empty($params['id'])) {
            echo 'Id is required!';
            return '';
        }
        $feedbackpost = Mage::getModel('feedback/feedbackpost');
        echo("Loading the feedbackpost with an ID of ".$params['id']);
        $feedbackpost->load($params['id']);
        $data = $feedbackpost->getData();
        var_dump($data);
       // $this->renderLayout();
    }

    public function showAllFeedbackPostsAction() {
        //$this->loadLayout();
        $posts = Mage::getModel('feedback/feedbackpost')->getCollection();
        foreach($posts as $feedback){
            echo '<h3>'.$feedback->getAuthorName().'</h3>';
            echo nl2br($feedback->getPost());
        }
        // $this->renderLayout();
    }

    //magento1.localhost/feedback/index/new?authorName=NewAuthor3&post=Feedback 3
    public function newAction() {
        $params = $this->getRequest()->getParams();
        if (empty($params['authorName']) || empty($params['post'])) {
            echo 'Missing some params';
            return '';
        }
        $feedbackpost = Mage::getModel('feedback/feedbackpost');
        $feedbackpost->setAuthorName($params['authorName']);
        $feedbackpost->setPost($params['post']);
        $feedbackpost->save();
        echo 'post with ID ' . $feedbackpost->getId() . ' created';
    }

    //http://magento1.localhost/feedback/index/update?id=1&authorName=New%20Autor%20name%201
    public function updateAction() {
        $params = $this->getRequest()->getParams();
        if (empty($params['id'])) {
            echo 'Id is required!';
            return '';
        }
        $feedbackpost = Mage::getModel('feedback/feedbackpost');
        $feedbackpost->load($params['id']);
        if (isset($params['authorName'])) {
            $feedbackpost->setAuthorName($params['authorName']);
        }
        if (isset($params['post'])) {
            $feedbackpost->setPost($params['post']);
        }
        $feedbackpost->save();
        echo 'post edited';
    }

    //magento1.localhost/feedback/index/delete?id=3
    public function deleteAction() {
        $params = $this->getRequest()->getParams();
        if (empty($params['id'])) {
            echo 'Id is required!';
            return '';
        }
        $feedbackpost = Mage::getModel('feedback/feedbackpost');
        $feedbackpost->load($params['id']);
        $feedbackpost->delete();
        echo 'post removed';
    }
}