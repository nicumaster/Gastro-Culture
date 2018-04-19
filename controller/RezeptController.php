<?php

require_once '../repository/RezeptRepository.php';

/**
 * Siehe Dokumentation im DefaultController.
 */
class RezeptController
{
    public function index()
    {
        $rezeptRepository = new RezeptRepository();
        $view = new View('rezept_index');
        $view->title = 'recipes';
        $view->heading = '';
        $view->recipes = $rezeptRepository->readrecipes($_GET['country']);
        $view->display();
    }

    public function ingredients() {
        $rezeptRepository = new RezeptRepository();
        $view = new View('rezept_ingridients');
        $view->title = 'ingridients';
        $view->heading = '';
        $view->ingredients = $rezeptRepository->readIngredients($_GET['recipe']);
        $view->display();
    }
    public function create() {
        $view = new View('user_create');
        $view->title = 'Benutzer erstellen';
        $view->heading = 'Benutzer erstellen';
        $view->display();
    }

    public function doCreate() {
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

    public function delete()
    {
        $userRepository = new UserRepository();
        $userRepository->deleteById($_GET['id']);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }
}
