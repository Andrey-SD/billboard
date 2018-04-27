<?php

namespace Billboard\Http\Controllers\Frontend;

use Billboard\Models\Advert;
use Illuminate\Http\Request;
use Billboard\Http\Controllers\Controller;

class ShowAdvertController extends Controller
{
    public function show($id)
    {
        $advert = Advert::find($id);
        if (!empty($advert->id)) {
            return view('show', ['advert' => $advert]);
        } else {
            abort(404);
        }
        
    }
}
