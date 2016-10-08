<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\View\View;

class ArticlesController extends Controller
{
    //
    public function create()
    {
        //
        return View('articles.create');
    }

}
