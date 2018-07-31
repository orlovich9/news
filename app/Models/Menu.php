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
        $items = self::all();
        $arTitles = [];
        $arParents = [];

        foreach ($items as $item)
        {
            $id = $item->id;
            $newItems = $items->where('id', '!=' , $id);

            foreach ($newItems as $newItem)
            {
                $arTitles[$id][$newItem->id] = $newItem->title;
            }

            if ($item->parent_id)
            {
                $newItems = $items->first(function($value, $key) use ($item) {
                    return $value->id == $item->parent_id;
                });

                if ($newItems)
                {
                    $arParents[$item->id] = [$newItems->id => $newItems->title];
                }
            }
        }

        return ['items' => $items, 'parents' => $arTitles, 'parent_title' => $arParents];
    }

}
