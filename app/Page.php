<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Page
 *
 * @author - Harold Bradley III
 * @date - Oct 8, 2016
 */
class Page extends Model {

    protected $fillable = ['title', 'slug', 'body', 'published'];

    /**
     * Use slug as RouteKeyName.
     *
     * @return string - database column
     */
    public function getRouteKeyName() {
        return 'slug';
    }

}
