<?php

namespace Billboard\Http\Controllers\Frontend;

use Auth;
use Billboard\Models\Advert;
use Illuminate\Http\Request;
use Billboard\Http\Controllers\Controller;

class EditAdvertController extends Controller
{
    public function showEditForm($id)
    {
        $advert = Advert::find($id);
        if ($advert->author_name == Auth::user()->name) {
        return view('edit',['advert' => $advert]);
        } else {
            abort(404);
        }
    }

    public function edit($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:128',
            'description' => 'required|max:1024'
        ]);
        $advert = Advert::find($id);
        $advert->title = $request->title;
        $advert->description = $request->description;
        $advert->save();
        return redirect('/show/$'.$id);
    }
}
