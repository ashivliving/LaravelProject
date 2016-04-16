<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function welcome(){
    	if(\Auth::user()){
    		return redirect()->route('articles.index');
    	}
    	return view('pages.welcome');
    }

    public function fb(){
    	return view('pages.fb');
    }
    public function geo(){
    	return view('pages.geogram');
    }
}
