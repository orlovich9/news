<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Http\Requests\Menus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Display Current Menu.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $menu = new Menu;
        $arItems = $menu->getMenuItems();

        return view('admin.menu', $arItems);
    }


    /**
     * Create or Update Menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createOrUpdateMenu(Menus $request)
    {
        foreach ($request->id as $key => $id)
        {
            $item = Menu::updateOrCreate(
                ['id' => $id],
                [
                    'title' => $request->title[$key],
                    'parent_id' => $request->parent[$key],
                    'sort' => $request->sort[$key]
                ]
            );
        }
        return redirect()->route('admin.menu')->with('status', 'Данные сохранены.');
    }

}
