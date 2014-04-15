<?php foreach ($this->order as $key => $value) { ?>

<div class="media">
    <img class="media-object img-circle pull-left" src="<?php echo $value['pic_link']; ?>">
    <div class="media-body">
        <h3 class="media-heading">
            <?php echo $value['title']; ?>
        </h3>
        <p><?php echo $value['detail']; ?></p>
    </div> <!-- .media-body -->
</div> <!-- .media -->
    
<?php }; ?>
