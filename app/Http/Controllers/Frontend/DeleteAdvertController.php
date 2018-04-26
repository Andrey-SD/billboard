<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advert;

class DeleteAdvertController extends Controller
{
    public function delete($id)
	{
		Advert::find($id)->delete();
		return redirect('/');	
	}
	
}
