        @foreach ($featured_projects as $project)
            <a href="{{ URL::route('projects.show', $project->slug) }}">{{ $project->name }}</a>
        @endforeach
