<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Advert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowAdvertController extends Controller
{
    public function show($id)
	{
		$advert = Advert::find($id);
		return view('show', ['advert' => $advert]);
	}
}
