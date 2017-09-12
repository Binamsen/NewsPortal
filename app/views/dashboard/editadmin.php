<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
   
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin</title>

   <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/font-awesome.min.css">
   
   <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/style.css">
   <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/style-responsive.css" />
  
	
    
	
	
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
  <!-- container section start -->
 
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div title="Toggle Navigation" data-toggle="popover" data-placement="right" data-trigger="hover"><i class="fa fa-bars icon"></i></div>
            </div>

            <!--logo start-->
            <a href="<?php echo URL;?>home" class="logo">THE  <span class="lite"> WORLD NEWS</span></a>
            <!--logo end-->

<!--            <div class="nav search-row" id="top_menu">
                  search form start 
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                  search form end                 
            </div>-->
<ul class="col-md-2">
    <li>
        <a href="#"><i class="fa fa-plus-circle icon"><span>New</span></i></a>
        
    </li>
</ul>            


            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                   
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope icon"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new messages</p>
                            </li>
<!--                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>-->
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>
  
  <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="<?php echo URL ?>dashboard">
                          <i class="fa fa-home"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="">
                      <a class="" href="">
                          <i class="fa fa-file-text"></i>
                          <span>Pages</span>
                      </a>
                  </li>
                  <li class="">
                      <a class="" href="<?php echo URL ?>Media">
                          <i class="fa fa-camera-retro"></i>
                          <span>Media</span>
                      </a>
                  </li>
<!--				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Form Elements</a></li>                          
                          <li><a class="" href="form_validation.html">Form Validation</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Elements</a></li>
                          <li><a class="" href="buttons.html">Buttons</a></li>
                          <li><a class="" href="grids.html">Grids</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Widgets</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="chart-chartjs.html">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>
                          
                      </a>
                                         
                  </li>
                             
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.html">Basic Table</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="profile.html">Profile</a></li>
                          <li><a class="" href="login.html"><span>Login Page</span></a></li>
                          <li><a class="" href="blank.html">Blank Page</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
                      </ul>
                  </li>-->
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
          
          
          
      </aside>
      <!--sidebar end-->
      <div id="edit-profile">
          <div class="col-md-12 text-center">
              
                  <div class="panel">
                      <div class="panel-heading">
                          <h3>Edit Profile</h3>
                      </div>
                      <?php foreach ($this->user as $adminuser){?>
                         <form name="editadmin" action="<?php echo URL .'editadmin/update';?>" method="get" class="form-group" enctype="multipart/form-data"> 
                      
                      <div class="panel-body">
                          <input type="hidden" name="sn" value="<?php echo ($adminuser[0]);?>"><br>       
                  <label>Username</label>
                  <input type="text" class="form-control" name="uname" id="uname" value="<?php echo ($adminuser[1]);?>">
                  <label>Password</label>
                  <input type="password" class="form-control" name="pass" id="pass" value="<?php echo ($adminuser[2]);?>">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" id="email" value="<?php echo ($adminuser[5]);?>">
                  <label>Date-of-Birth</label>
                  <input type="date" class="form-control" id="date" name="date" value="<?php echo ($adminuser[3]);?>">
                  <label>Phone-Number</label>
                  <input type="number" class="form-control" name="number" id="number" value="<?php echo ($adminuser[4]);?>">
                  
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Select Profile Picture
                            </button>
                            <input type="text" id="pic" name="pic" class="form-control" readonly>
                  
                 <button type="submit" class="btn btn-success"  name="update">UPDATE</button>

              </div>
                         </form>
                      
                                                       <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h3 class="modal-title">Select Picture</h3>
                                </div>
                                <div class="modal-body">
                                  <?php 
                                  $dir = 'public/adminuploads/';
                                  $path = URL .'public/adminuploads/';
                                  $files = scandir($dir);
                                  foreach ($files as $item){
                                      if(!is_dir($item)){
                                       ?>   
                                      <img src="<?php echo $path . $item; ?>" width="100px" class="img-thumbnail" onclick="setPath('<?php echo $path . $item; ?>')" data-dismiss="modal">
                                       <?php
                                      }
                                  }
                                      ?>
                                    
                                  
                                  
                                  
                                  
                                </div><!--end of modal body-->
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                </div>
					
				</div><!--end of modal content-->
               
            </div><!--end of col-md-10-->

        </div>
                      <?php }?>
                  </div>
              
              </div>
          </div>
          
     
      

  
  <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
  
  <script>
   function setPath(path){
   var f = document.forms['editadmin'];
   f.pic.value =path;
   }
</script>
  
  <script>
  $(document).ready(function(){
     
     $(".toggle-nav").click(function(){
         $("#sidebar").toggle();
     }) ;
  });
  </script>
  
</body>
</html>





