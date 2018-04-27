<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Advert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditAdvertController extends Controller
{
    public function showEditForm($id)
	{
		$advert = Advert::find($id);
		return view('edit',['advert' => $advert]);
	}
	
	public function edit($id, Request $request)
	{
		$advert = Advert::find($id);
		$advert->title = $request->title;
		$advert->description = $request->description;
		$advert->save();
		return redirect('/show/$'.$id);
	}
}
