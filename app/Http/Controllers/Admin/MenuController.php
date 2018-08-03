<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Http\Requests\Menus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public $menu;

    public function __construct()
    {
        $this->menu = new Menu;
    }

    /**
     * Display Current Menu.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $arItems = $this->menu->getMenuItems();

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
        $this->menu->createOrUpdateMenu($request);

        return redirect()->route('admin.menu')->with('status', 'Данные сохранены.');
    }

    /**
     * Delete Menu Item
     * @param Request $request
     * @return string
     */
    public function deleteMenuItem(Request $request)
    {
       return $this->menu->deleteMenuItem($request);
    }

}
