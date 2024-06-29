<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-white font-bold text-xl">
            <a href="{{ url('/') }}">MyApp</a>
        </div>
        <div class="block lg:hidden">
            <button id="navbar-toggle" class="text-gray-300 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <ul id="navbar-menu" class="hidden lg:flex space-x-4">
            <li><a href="{{ url('/') }}" class="text-gray-300 hover:text-white">Home</a></li>
            <li><a href="{{ url('/about') }}" class="text-gray-300 hover:text-white">About</a></li>
            <li><a href="{{ url('/contact') }}" class="text-gray-300 hover:text-white">Contact</a></li>
            @guest
                <li><a href="{{ route('login') }}" class="text-gray-300 hover:text-white">Login</a></li>
                <li><a href="{{ route('register') }}" class="text-gray-300 hover:text-white">Register</a></li>
            @else
                <li><a href="{{ route('logout') }}" class="text-gray-300 hover:text-white"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </ul>
    </div>
</nav>

<script>
document.getElementById('navbar-toggle').addEventListener('click', function () {
    var menu = document.getElementById('navbar-menu');
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
    } else {
        menu.classList.add('hidden');
    }
});
</script>