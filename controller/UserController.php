<?php

require_once '../repository/UserRepository.php';

/**
 * Siehe Dokumentation im DefaultController.
 */
class UserController
{
    public function index()
    {
        $view = new View('users_index');
        $view->title = 'Users';
        $view->heading = '';
        $view->display();
    }

    public function register()
    {
        $view = new View('user_register');
        $view->title = 'Register';
        $view->heading = '';
        $view->display();
    }

    public function profile()
    {
        $view = new View('user_profile');
        $view->title = 'Profile';
        $view->heading = '';
        $view->display();
    }

    public function doRegister()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $passwort = $_POST['password'];
        $passwort = password_hash($passwort, PASSWORD_DEFAULT);
        $userRepository = new UserRepository();
        $userRepository->create($username, $firstname, $lastname, $email, $passwort);
    }

    public function delete()
    {
        $userRepository = new UserRepository();
        $userRepository->deleteById($_GET['id']);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }
}
