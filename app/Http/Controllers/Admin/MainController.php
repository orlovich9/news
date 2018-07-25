<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
   /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.index');
    }

   /**
     * Show Lockscreen
     *
     * @return \Illuminate\Http\Response
     */
    public function showLock()
    {
        Auth::logout();
        return view('admin.lock');
    }
}
