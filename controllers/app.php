<?php

class App extends Controller {

    public function __construct() { 
        parent::__construct();
    }
    
    public function index() {
        $this->view->js = array('app.index.js');
        $this->view->render('app', 'index');
    }
    
}