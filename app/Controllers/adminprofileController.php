<?php
require 'app/Models/adminlogin.php';

class adminprofileController extends Controller{
    public function index(){
        Session::init();
       $logged = Session::get('adminuser');
       
       $this->view->users = new AdminLogin();
       $this->view->user = $this->view->users->showadmin();
       
        $this->view->render('dashboard/adminprofile');
    }
    
    public function store(){
        if(isset($_REQUEST['submit'])){
            $uploaddir = 'public/adminuploads/';
            $name = $_FILES['photo']['name'];
            $tmpname = $_FILES['photo']['tmp_name'];
            $size = $_FILES['photo']['size'];
            $type = $_FILES['photo']['type'];
            $ok=1;
            $fileExtension = pathinfo($name,PATHINFO_EXTENSION);
            if(file_exists($uploaddir . $name)){
                echo ('File already exists');
                $ok = 0;
            }
 else {
     if($size > 1048576){
         echo ('File size too large!!');
         $ok = 0;
     }else if ($fileExtension != "jpg" && $fileExtension != "png" && $fileExtension != "gif") {
                    echo("Image format not supported.");
                    $ok = 0;
                }
                else {

                    move_uploaded_file($tmpname, $uploaddir . $name);
                }
 }
            
        }
         echo  "<script>window.location.href ='http://localhost/Newsportal/adminprofile' </script>";
    }
}

