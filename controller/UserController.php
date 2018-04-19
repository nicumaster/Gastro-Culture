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

    public function doCreate()
    {
        if ($_POST['send']) {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            // $password  = $_POST['password'];
            $password = 'no_password';

            $userRepository = new UserRepository();
            $userRepository->create($firstName, $lastName, $email, $password);
        }

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }

    public function doLogin(){

        echo "<script type='text/javascript'>confirm(\"Press a button!\");</script>";
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userRepository = new UserRepository();
            $userRepository->login($username, $password);
        }
    }
    public function delete()
    {
        $userRepository = new UserRepository();
        $userRepository->deleteById($_GET['id']);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }
}
