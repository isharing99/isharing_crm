<?php
namespace App\Controller;

use App\Controller\AppController;

class LoginController extends AppController
{
    public function index()
    {
		$this->set('message', 'Hello! this is sample page. ;-)');
    }
}