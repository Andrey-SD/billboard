<?php

namespace Billboard\Helpers;

use Auth;
use Billboard\Models\Advert;

class ReAuth
{
    public static function get($id)
    {
        if (Advert::find($id)) {
            if (Auth::user()->name != Advert::find($id)->author_name) {
                abort(404);
            }
        } else {
            abort(404);
        }
    }
}
