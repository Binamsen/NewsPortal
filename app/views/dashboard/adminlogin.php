<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AdminLogin</title>
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/admin.css">
    </head>
    <body>
        
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <i class="fa fa-user-circle icon">Admin</i>
                </div>
                <div class="panel-body">
                    <form action="#" method="post" class="form-group">
                        <h4 class="text-danger">
                            <?php if(isset($_REQUEST['submit'])){
                                echo $this->msg;
                            }?>
                        </h4>
                        <input type="text" placeholder="username" class="form-control" name="username"><br>
                        <input type="password" placeholder="password" class="form-control" name="password"><br>
                        <button type="submit" class="btn btn-info btn-block" name="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>