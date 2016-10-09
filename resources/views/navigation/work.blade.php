        @foreach ( array_merge($featured_websites, $featured_projects) as $project)
            <a href="{{ URL::route('project', $project->slug) }}">{{ $project->name }}</a>
        @endforeach
