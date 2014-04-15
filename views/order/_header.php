    
    <div class="container">
        <!-- header location -->
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <h1 class="clearfix page-header">
                    <a href="<?php echo URL; ?>"  style="text-decoration: none;">
                        Foodr
                    </a>
                    <small>Today, what to eat ?</small>
                    
                    <span class="pull-right">
                        <a id="reorder" class="btn btn-default btn-md" role="button" data-loading-text="Loading..." 
                        href="<?php echo URL . 'order'; ?>">
                            <span class="glyphicon glyphicon-cutlery"></span>
                            Re-Order
                        </a>
                    </span>
                </h1>
            </div>
        </div>
        
        <!-- contents location -->
        <div class="row">
            <div class="<?php echo $this->column_class; ?>">