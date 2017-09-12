<?php

class dashboardController extends Controller{
    public function index(){
        Session::init();
       $logged = Session::get('adminuser');
       if(isset($logged)){
        
        $this->view->render('dashboard/dashboard');
        }
        else{
            header('location: adminlogin');
        }
            
    }
    }
