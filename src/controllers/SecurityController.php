<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';

class SecurityController extends AppController {
    public function login() {
        $user = new User('jsnow@pk.edu.pl', 'admin', 'John', 'Snow');

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['Wrong email.']]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Wrong password.']]);
        }

        // return $this->render('dashboard');

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/dashboard");
    } 

    public function register() {
        if (!$this->isPost()) {
            return $this->render('registration');
        }
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user = new User($email, $password, $name, $surname);
        // TODO add user to the database (and validation)

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
    }
}