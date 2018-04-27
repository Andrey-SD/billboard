<?php

namespace Billboard\Http\Controllers\Frontend;

use Billboard\Models\Advert;
use Illuminate\Http\Request;
use Billboard\Http\Controllers\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        $adverts = Advert::orderBy('created_at', 'desc')
            ->simplePaginate(5);
        return view('home',['adverts'=>$adverts]);
    }
}
