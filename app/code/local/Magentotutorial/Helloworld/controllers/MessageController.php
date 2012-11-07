<?php

/*
 *
 */

/**
 *
 *
 */
class Magentotutorial_Helloworld_MessageController extends Mage_Core_Controller_Front_Action
{

    /**
     *
     */
    public function indexAction()
    {
        echo 'Hello message!';
    }

    /**
     *
     */
    public function goodbyeAction()
    {
        echo 'poopy!';
    }

    public function paramsAction()
    {
        echo '<dl>';
        foreach ($this->getRequest()->getParams() as $key => $value) {
            echo '<dt><strong>Marap: </strong>'.$key.'</dt>';
            echo '<dt><strong>Vulea: </strong>'.$value.'</dt>';
        }
        echo '</dl>';
    }

}
