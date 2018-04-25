<?php

namespace App\Http\Controllers;

use User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Advert;

class CreateAdvertController extends Controller
{
    public function showCreateForm()
	{
		return view('create');
	}
	
	public function create(Request $request)
	{
//		echo $request->title.'<br>';
//		echo $request->description.'<br>';
//		echo  Auth::user()->name.'<br>';
		Advert::insert(array(
		  'title'  => $request->title,
		  'description' => $request->description,
		  'author_name' => Auth::user()->name
		));
	}
}
