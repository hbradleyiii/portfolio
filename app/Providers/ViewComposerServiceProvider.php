<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Project;
use App\Skill;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeNavigation();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Set up variables for navigation views.
     *
     * @return void
     */
    private function composeNavigation()
    {
        view()->composer('navigation.work', function($view)
        {
            $view->with('featured_projects', Project::featured_projects());
        });

        view()->composer('navigation.skills', function($view)
        {
            $view->with('featured_skills', Skill::featured_skills());
        });

    }
}
