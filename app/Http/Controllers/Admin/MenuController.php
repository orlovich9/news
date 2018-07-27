<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Http\Requests\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.menu');
    }


    /**
     * Create or Update Menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createOrUpdateMenu(Menu $request)
    {
        //
    }

}
