<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Redirect;

use App;
use Lang;

class LanguageChooserController extends Controller
{
     public function chooser()
    {
    	Session::set('locale',Input::get('locale'));
    	return Redirect::back();
    }
}
