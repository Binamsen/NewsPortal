<?php

class homeController extends Controller{
    public function index() {
        $this->view->render('home');
    }
}
