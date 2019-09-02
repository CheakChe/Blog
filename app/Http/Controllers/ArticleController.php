<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ArticleController extends Controller
{
    public function index($locale, $id)
    {
    	App::setLocale($locale);
    	$article = App\articles::article($id);
    	return view('article', compact('article'));
    }
}
