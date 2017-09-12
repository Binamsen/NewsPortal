<?php

class logoutController extends Controller{
    public function index(){
        Session::init();
        Session::destroy();
        header("location: adminlogin");
    }
}
