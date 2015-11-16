<?php namespace App\Http\Controllers;

use App\Http\Requests;

class BasicController extends Controller
{

    public function routeWithSessionFlash()
    {
        \Session::flash('test','value');
        return redirect()->route('destination');
    }

    public function routeWithSessionPut()
    {
        \Session::put('test','value');
        return redirect()->route('destination');
    }

    public function routeWithoutRedirect()
    {
        \Session::flash('test','value');
        return view('output');
    }

    public function destination()
    {
        return view('output');
    }
}
