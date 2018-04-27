<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Advert;
use App\Http\Controllers\Controller;

class CreateAdvertController extends Controller
{
    public function showCreateForm()
    {
        return view('create');
    }
    
    public function create(Request $request)
    {
        $new_advert = Advert::create(array(
            'title'  => $request->title,
            'description' => $request->description,
            'author_name' => Auth::user()->name
        ));
        return redirect('/show/$'.$new_advert->id);
    }
}
