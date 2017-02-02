<?php
    class IndexController extends Zend_Controller_Action
    {

        public function init()
        {

        }

        public function indexAction()
        {
            $this->view->layout()->metaDescription  = "Nito Janito";
            $this->view->layout()->metaTags         = "Nito Janito";
            $this->view->layout()->pageTitle        = "Nito Janito";
        }
    }