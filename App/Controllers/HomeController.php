<?php namespace App\Controllers;

use App\Models\Article;
use App\Models\User;
use Core\Controller;
use Core\View;

class HomeController extends Controller
{
    public function index()
    {
        var_dump(User::find(1)->fullname);die;
//        return View::renderTemplate("index");
    }
}