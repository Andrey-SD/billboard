<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Advert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    public function index()
	{
		$adverts = Advert::orderBy('created_at', 'desc')->simplePaginate(5);
        return view('home',['adverts'=>$adverts]);
	}
}
