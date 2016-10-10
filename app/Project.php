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

    protected $fillable = ['title', 'slug', 'body', 'published'];

    /**
     * Use slug as RouteKeyName.
     *
     * @return string - database column
     */
    public function getRouteKeyName() {
        return 'slug';
    }

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

    /**
     * Returns all featured projects (development or websites)
     */
    static public function featured_projects() {
        return Project::where('featured_development', '=', '1')->get()
                      ->orWhere('featured_websites', '=', '1')->get()
                      ->get();
    }

    /**
     * Returns all featured development projects
     */
    static public function featured_development() {
        return Project::where('featured_development', '=', '1')->get();
    }

    /**
     * Returns all featured website projects
     */
    static public function featured_websites() {
        return Project::where('featured_websites', '=', '1')->get();
    }
}
