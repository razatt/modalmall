<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    private $list = [];
    private $tree = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany('App\Image', 'imageable_id');
    }

    public function scopeTree($query){
        $tree = [];
        foreach ($query->get() as $v) {
//            $this->list[$v["id"]] = array("id" => $v["id"], "pid" => $v["pid"], "title" => $v["title"]);
            $tree[$v["pid"]][] = $v;
        }
        return $tree;
    }
}
