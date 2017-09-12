<?php

class MediaController extends Controller{
    public function index(){
        Session::init();
        $logged = Session::get('adminuser');
        if(isset($logged)){
            $this->view->render('dashboard/Media');
        } else {
         header('location: adminlogin');    
        }
    }
    
    public function store(){
        if(isset($_REQUEST['submit'])){
            $uploaddir = 'public/uploads/';
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
         echo  "<script>window.location.href ='http://localhost/Newsportal/Media' </script>";
    }
}

