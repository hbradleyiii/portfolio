        @foreach ( $featured_skills as $skill )
            <a href="{{ URL::route('skills.show', $skill->slug) }}">{{ $skill->name }}</a>
        @endforeach
