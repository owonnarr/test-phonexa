<?php
namespace App\controllers;
use Engine\Controller;

class ContactsController extends Controller
{
    public function index()
    {
    $this->view->render('contacts/index');
    }
}