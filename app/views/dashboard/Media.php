<?php require_once 'header.php'; ?>

<div id="site-media">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <form name="mediaform" class="form-group" action="<?php echo URL;?>Media/store" method="post" enctype="multipart/form-data">
                    <input type="file" name="photo">
                    <button type="submit" class="btn btn-info" name="submit">Upload</button>
                </form> 
            </div>
            <div class="panel-body">
                <?php
                $dir = 'public/uploads/';
                $path = 'public/uploads/';
                $files = scandir($dir);
                foreach ($files as $item){
                    if(!is_dir($item)){
                        ?>
                     <figure>
                    <img src="<?php echo $path.$item; ?>" width="100px" class="img-thumbnail">
                    <caption> <?php 
                   
                    echo $item;
                    ?></caption>
                </figure>
                    <?php }
                }
                ?>
            </div>
        </div>
    </div>
</div>