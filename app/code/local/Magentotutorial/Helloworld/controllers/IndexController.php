<?php

/*
 *
 */

/**
 *
 *
 */
class Magentotutorial_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{

    public $message = '';

    /**
     *
     */
    public function indexAction()
    {
        $this->message = 'Hello Indecks!';
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     *
     */
    public function goodbyeAction()
    {
        $this->message = 'Goodbye cruel world!';
        $this->loadLayout();
        $this->renderLayout();
    }

    public function paramsAction()
    {
        echo '<dl>';
        foreach ($this->getRequest()->getParams() as $key => $value) {
            echo '<dt><strong>Param: </strong>'.$key.'</dt>';
            echo '<dt><strong>Value: </strong>'.$value.'</dt>';
        }
        echo '</dl>';
    }

}
