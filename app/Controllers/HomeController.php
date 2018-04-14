<?php namespace App\Controllers;

use Core\Controller;
use Core\View;
use App\Models\User;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
      
        $user = new User();
        var_dump($user->findUser(1));die;
//        return View::renderTemplae('index');
    }
}