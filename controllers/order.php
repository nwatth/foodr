<?php

class Order extends Controller {

    public function __construct() { 
        parent::__construct();
    }
    
    public function index()
    {
        $this->view->css            = array();
        $this->view->js             = array('order.index.js');
        
        $this->view->column_class   = 'col-md-offset-2 col-md-8';
        $this->view->order          = $this->model->index();
        
        $this->view->render('order');
    }
    
}