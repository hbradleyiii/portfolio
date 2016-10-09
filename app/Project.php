<?php

namespace App;

use App\ProjectUrl;
use App\ProjectImage;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 *
 * @author - Harold Bradley III
 * @date - Oct 8, 2016
 */
class Project extends Model {

    protected $guarded = [];

    /**
     * Returns all project skills
     */
    public function skills() {
        return $this->belongsToMany(ProjectSkill::class);
    }

    /**
     * Returns all project urls
     */
    public function urls() {
        return $this->hasMany(ProjectUrl::class);
    }

    /**
     * Returns all project images
     */
    public function images() {
        return $this->hasMany(ProjectImage::class);
    }
}
