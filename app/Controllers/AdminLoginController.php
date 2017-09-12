<?php

require 'app/models/adminlogin.php';

class AdminLoginController extends Controller{
    public function index(){
        Session::init();
        if(isset($_POST['submit'])){
            $this->u = $_POST['username'];
            $this->p = $_POST['password'];
            $logged ='adminuser';
            $this->login = new AdminLogin;
            $count=$this->login-> checkLogin($this->u,$this->p);
            if($count>0){
                Session::set($logged,$this->u);
                header('location: dashboard');
            }
 else {
     $this->view->msg = 'Invalid username or password';
 }
        }
        $this->view->render('dashboard/adminlogin');
    }
}

