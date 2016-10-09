    <header>
        <a href="/" class="signature">haroldbradleyiii.com</a>
        <input type="checkbox" name="menu-toggle" id="menu-toggle">
        <label for="menu-toggle">Menu</label>
        <nav class="main-nav">
            @include('navigation.main')
        </nav>
    </header>
    <script type="text/javascript">
        jQuery( function ($) { // Sticky Header:
            $( window ).scroll( function() {
                var header = $( "body > header, body" );
                if($(this).scrollTop() > 10) {
                    header.addClass( "sticky" );
                } else {
                    header.removeClass( "sticky" );
                }
            });
        });
    </script>
