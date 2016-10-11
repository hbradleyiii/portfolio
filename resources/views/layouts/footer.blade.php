    <footer>
    @if(count($featured_projects) > 0)
        <section class="work">
            <h2>Work</h2>
            @include('navigation.work')
        </section>
    @endif
    @if(count($featured_skills) > 0)
        <section class="skills">
            <h2>Skills</h2>
            @include('navigation.skills')
        </section>
    @endif
        <section class="social">
            <h2>Social</h2>
            @include('navigation.social')
        </section>
        <section class="vita">
            <h2>Vita</h2>
            @include('navigation.vita')
        </section>
        <nav class="footer-nav">
            @include('navigation.main')
        </nav>
        <span class="copyright">
            Copyright &copy; {{ date('Y') }} -
            {{ name_with_email() }}
            - All rights reserved.
        </span>
    </footer>
