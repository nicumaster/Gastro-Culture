<?php

require_once '..\repository\LandRepository.php';

/**
 * Siehe Dokumentation im DefaultController.
 */
class LandController
{
    public function index()
    {
        $view = new View('user_index');
        $view->title = 'Benutzer';
        $view->heading = 'Benutzer';
        $view->display();
    }

    public function Alaska()
    {
        $view = new View('Land_Alaska');
        $view->title = 'Alaska';
        $view->heading = 'Alaska';
        $view->display();
    }
}
