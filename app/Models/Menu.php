<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use Sluggable;

    /**
     * Table.
     *
     * @var string
     */
    protected $table = 'menu';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'parent_id', 'sort'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [ 'slug' => [ 'source' => 'title' ]];
    }

    /**
     * Get Menu Items
     * @return array
     */
    public function getMenuItems()
    {
        $items = self::all()->sortBy('sort');
        $arTitles = [];
        $arParents = [];

        foreach ($items as $item) {
            $id = $item->id;
            $newItems = $items->where('id', '!=' , $id);

            foreach ($newItems as $newItem) {
                $arTitles[$id][$newItem->id] = $newItem->title;
            }

            if ($item->parent_id) {
                $newItems = $items->first(function($value, $key) use ($item) {
                    return $value->id == $item->parent_id;
                });

                if ($newItems) {
                    $arParents[$item->id] = [$newItems->id => $newItems->title];
                }
            }
        }

        return ['items' => $items, 'parents' => $arTitles, 'parent_title' => $arParents];
    }

    /**
     * Create or Update Menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createOrUpdateMenu($request)
    {
        foreach ($request->id as $key => $id) {
            try {
                self::updateOrCreate(
                    ['id' => $id],
                    [
                        'title' => $request->title[$key],
                        'parent_id' => !empty($request->parent[$key]) ? $request->parent[$key] : null,
                        'sort' => !empty($request->sort[$key]) ? $request->sort[$key] : null
                    ]
                );
            } catch (Exception $e) {
                return redirect()->route('admin.menu')->withErrors($e->getMessage());
            }
        }
    }

    /**
     * Delete Menu Item
     * @param Request $request
     * @return string
     */
    public function deleteMenuItem($request)
    {
        if ($request->id) {
            $result = self::destroy($request->id);
            return $result;
        }
    }
}
