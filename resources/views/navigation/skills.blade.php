        @foreach ( $featured_skills as $skill )
            <a href="{{ URL::route('skill', $skill->slug) }}">{{ $skill->name }}</a>
        @endforeach
