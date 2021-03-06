<?php

namespace App;

use App\Project;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Skill
 *
 * @author - Harold Bradley III
 * @date - Oct 9, 2016
 */
class Skill extends Model {

    protected $guarded = [];

    /**
     * Returns all projects that use this skill
     */
    public function projects() {
        return $this->belongsToMany(Project::class);
    }

    /**
     * Returns all featured skills
     */
    static public function featured_skills() {
        return Skill::where('featured_skill', '=', '1')->get();
    }
}
