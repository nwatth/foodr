<?php

class View {

    public function __construct() {
        $this->tmpl             = array();
        $this->tmpl['title']    = APP_NAME;
        $this->column_class     = 'col-md-offset-1 col-md-10';
    }

    /**
     * 
     * @param string view Name of the view
     * @param string action Name of the action
     */
    public function render($view, $action = 'index')
    {
        require 'views/header.php';
        
        // header of view
        if (file_exists('views/' . $view . '/_header.php')) {
            require 'views/' . $view . '/_header.php';  
        }
        
        require 'views/' . $view . '/' . $action . '.php';
        
        // footer of view
        if (file_exists('views/' . $view . '/_footer.php')) {
            require 'views/' . $view . '/_footer.php';  
        }
        
        require 'views/footer.php';
    }

}