<?php

namespace Billboard\Http\Controllers\Frontend;

use Auth;
use Illuminate\Http\Request;
use Billboard\Http\Controllers\Controller;
use Billboard\Models\Advert;

class DeleteAdvertController extends Controller
{
    public function delete($id)
    {
        $advert = Advert::find($id);
        if ($advert->author_name == Auth::user()->name) {
            $advert->delete();
            return redirect('/');
        } else {
            abort(404);
        }
    }
}
