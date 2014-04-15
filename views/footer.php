
    <script type="text/javascript" src="http://127.0.0.1/foodr/public/js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="http://127.0.0.1/foodr/public/js/bootstrap-3.1.1.min.js"></script>

    <?php 
    if (isset($this->js)) 
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.URL.'public/js/'.$js.'"></script>';
            echo "\n";
        }
    }
    ?>

  </body>
</html>