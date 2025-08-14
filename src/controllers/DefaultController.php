<?php

require_once 'AppController.php';

class DefaultController extends AppController {
    public function index() {
        $this->render('registration');
    }

    public function login() {
        $this->render('login');
    }

    public function dashboard() {
        $this->render('dashboard');
    }
}