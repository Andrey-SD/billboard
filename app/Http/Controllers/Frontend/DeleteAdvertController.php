<?php

namespace Billboard\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Billboard\Http\Controllers\Controller;
use Billboard\Models\Advert;

class DeleteAdvertController extends Controller
{
    public function delete($id)
    {
        Advert::find($id)->delete();
        return redirect('/');	
    }
}
