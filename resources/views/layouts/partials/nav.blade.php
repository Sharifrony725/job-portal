   <nav class="flex justify-between items-center mb-4">
            <a href="{{ route('home') }}"
                ><img class="w-24" src="{{ asset('assets/images/logo.png') }}" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                <li>
                    <span>Welcome {{ auth()->user()->name ?? null }}</span>
                </li>
                <li>
                    <a href="{{ route('jobs.index') }}" class="hover:text-laravel">
                        <i class="fa-solid fa-gear"></i> Manage Jobs
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="hover:text-laravel">
                        <i class="fa-solid fa-sign-out"></i> Logout
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ route('users.create') }}" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="{{ route('login') }}" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
        @endauth

            </ul>
        </nav>
