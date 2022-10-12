        @include('layouts.partials.header')
        <!-- Nav -->
        @include('layouts.partials.nav')
        <!-- Hero -->
        @include('layouts.partials.hero_section')
        <!-- Main -->
        {{-- @include('layouts.partials.main') --}}
        @yield('content')
        <!-- Footer -->
        @include('layouts.partials.footer')
