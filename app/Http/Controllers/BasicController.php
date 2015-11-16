<?php namespace App\Http\Controllers;

use App\Http\Requests;

class BasicController extends Controller
{

    public function routeWithSessionFlash()
    {
        \Session::flash('test','flashedData');
        return redirect()->route('destination');
    }

    public function routeWithSessionPut()
    {
        \Session::put('test','flashedData');
        return redirect()->route('destination');
    }

    public function routeWithoutRedirect()
    {
        \Session::flash('test','flashedData');
        return view('output');
    }

    public function destination()
    {
        return view('output');
    }
}
