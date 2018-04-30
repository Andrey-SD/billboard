<?php

namespace Billboard\Http\Controllers\Frontend;

use Auth;
use Billboard\Helpers\ReAuth;
use Illuminate\Http\Request;
use Billboard\Http\Controllers\Controller;
use Billboard\Models\Advert;

class DeleteAdvertController extends Controller
{
    public function delete($id)
    {
        ReAuth::get($id);
        Advert::find($id)->delete();
        return redirect('/');
    }
}
