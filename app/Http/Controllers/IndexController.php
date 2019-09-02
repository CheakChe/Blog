<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class IndexController extends Controller
{
	public function index()
	{
		$articles = App\articles::articles();
		return view('index', compact('articles'));
	}
    public function lang($locale)
    {
    	App::setLocale($locale);
    	$articles = App\articles::articles();
    	return view('index', compact('articles'));
    }
}
