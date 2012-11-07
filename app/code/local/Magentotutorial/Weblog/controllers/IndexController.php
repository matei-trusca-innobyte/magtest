<?php
/*
 *
 */

/**
 *
 */
class Magentotutorial_Weblog_IndexController extends Mage_Core_Controller_Front_Action
{

    /**
     *
     */
    public function testModelAction()
    {
        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('weblog/blogpost');
        echo('Loading the blogpost and ID of '.$params['id']);
        $blogpost->load($params['id']);
        $data = $blogpost->getData();
        var_dump($data, $blogpost);
    }

    /**
     *
     */
    public function showAllBlogPostsAction()
    {
        $posts = Mage::getModel('weblog/blogpost')->getCollection();
        foreach ($posts as $id => $post) {
            echo '<h3>$id - '.$post['title'].'</h3>';
            echo nl2br('<p>'.$post['post'].'</p>');
        }
    }

    /**
     *
     */
    public function createNewPostAction()
    {
        $blogpost = Mage::getModel('weblog/blogpost');
        $blogpost->setTitle('Code Post!');
        $blogpost->setPost('This post was created from code!');
        $blogpost->save();
        echo 'post with ID '.$blogpost->getId().' created';
    }

    /**
     *
     */
    public function editFirstPostAction()
    {
        $blogpost = Mage::getModel('weblog/blogpost');
        $blogpost->load(4);
        if ($blogpost->isObjectNew()) {
            throw new Exception('naught lowdeed');
        }
        $blogpost->setTitle('The First Post!');
        /* $blogpost->setPost('This post was created from code!'); */
        $blogpost->save();
        echo 'post edited';
        foreach ($blogpost->getData() as $field => $value) {
            var_dump($field, $blogpost[$field]);
        }
    }

    /**
     *
     */
    public function deleteFirstPostAction()
    {
        $blogpost = Mage::getModel('weblog/blogpost');
        $blogpost->load(1);
        $blogpost->delete();
        echo 'post deleted';
    }

}
