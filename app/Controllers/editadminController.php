<?php

require 'app/Models/adminlogin.php';

class editadminController extends Controller{
    
    public function index(){
         Session::init(); 
         $this->users= new AdminLogin();
         if(isset($_REQUEST['id'])){
             $this->adminID = $_REQUEST['id'];
         } else {
            $this->adminID = null;    
         }
         $this->view->user = $this->users->getAdmin($this->adminID);
         
         $this->view->render('dashboard/editadmin');
    }
    
    public function update(){
        $this->users = new AdminLogin();
        if(isset($_REQUEST['update'])){
            $uname = $_GET['uname'];
            $pass = $_GET['pass'];
            $date = $_GET['date'];
            $number = $_GET['number'];
            $email = $_GET['email'];
            $image_path = $_GET['pic'];
            $sn = $_GET['sn'];
            
            $this->view->user = $this->users->updateAdmin($uname,$pass,$date,$number,$email,$image_path,$sn);
            
            echo "<script>window.location.href = 'http://localhost/Newsportal/adminprofile' </script>";
        }
    }
}
