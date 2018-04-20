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

    public function ingredients()
    {
        $recipeRepository = new RecipeRepository();
        $view = new View('recipe_ingridients');
        $view->title = 'ingridients';
        $view->heading = '';
        $view->recipes = $recipeRepository->readRecipe($_GET['rid']);
        $view->ingredients = $recipeRepository->readIngredients($_GET['recipe']);
        $view->display();
    }
}