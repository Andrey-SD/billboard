<?php

namespace Billboard\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Billboard\Models\Advert;
use Billboard\Http\Controllers\Controller;

class CreateAdvertController extends Controller
{
    public function showCreateForm()
    {
        return view('create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:128',
            'description' => 'required|max:1024'
        ]);
        $new_advert = Advert::create(array(
            'title'  => $request->title,
            'description' => $request->description,
            'author_name' => Auth::user()->name
        ));
        return redirect('/show/$'.$new_advert->id);
    }
}
