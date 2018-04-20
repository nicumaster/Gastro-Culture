<?php

require_once '../repository/RecipeRepository.php';

/**
 * Siehe Dokumentation im DefaultController.
 */
class RecipeController
{
    public function index()
    {
        $recipeRepository = new RecipeRepository();
        $view = new View('recipe_index');
        $view->title = 'recipes';
        $view->heading = '';
        $view->recipes = $recipeRepository->readrecipes($_GET['country']);
        $view->display();
    }

    public function ingredients() {
        $recipeRepository = new RecipeRepository();
        $view = new View('recipe_ingridients');
        $view->title = 'ingridients';
        $view->heading = '';
        $view->recipes = $recipeRepository->readRecipe($_GET['rid']);
        $view->ingredients = $recipeRepository->readIngredients($_GET['recipe']);
        $view->display();
    }
<<<<<<< HEAD:controller/RecipeController.php

    public function add() {
        $view = new View('recipe_add');
=======
    public function create() {
        $view = new View('rezept_add');
>>>>>>> 305a302b0927ad3f93c2a2254da7c6a78efdec9c:controller/RezeptController.php
        $view->title = 'add recipe';
        $view->heading = 'add recipe';
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
