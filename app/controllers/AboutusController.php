<?php
namespace App\controllers;

use Engine\Controller;
use App\models\Users;

class AboutusController extends Controller
{
    public function index()
    {
        $users = new Users();
        $user = $users->getUser();
        $this->view->render('aboutus/index',[
            'user' => $user
        ]);
    }
}