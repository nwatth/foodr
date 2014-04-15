<!doctype html>

<html>
  
  <head>
    <meta charset="UTF-8">
    <title><?=$this->tmpl['title']?></title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://127.0.0.1/foodr/public/css/bootstrap-3.1.1.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css">
    
    <?php 
    if (isset($this->css)) 
    {
        foreach ($this->css as $css)
        {
            echo '<link rel="stylesheet" href="'.URL.'public/css/'.$css.'">';
            echo "\n";
        }
    }
    ?>
  </head>
  
  <body>
  