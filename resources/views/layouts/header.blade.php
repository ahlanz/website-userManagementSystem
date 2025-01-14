<header class="flex items-center justify-between px-6 mt-5 py-4 bg-gray-200 border-b-4">
    <!-- Hamburger Button for Mobile -->
    <div class="flex items-center lg:hidden">
        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>

    <!-- Search Form (Centered) -->
    <form class=" flex items-center w-full max-w-3xl mx-auto">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 19l-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>

            </div>
            <input type="text" id="simple-search" class="rounded-full bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Search branch name..." required />
        </div>

    </form>

    <!-- User Profile Dropdown -->
    <div class="flex items-center space-x-4">
        <div x-data="{ dropdownOpen: false }" class="relative">
            <div class="flex items-center">
                <img class="object-cover rounded-full w-12 h-12" src="{{ url('https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=296&q=80') }}" alt="Your avatar">
                <div class="flex flex-col mx-4">
                    <h3 class="font-sans text-sm">{{ Auth::user()->name }}</h3>
                    <p class="font-sans text-xs">{{ Auth::user()->email }}</p>
                </div>
                <button @click="dropdownOpen = ! dropdownOpen" class="relative block w-6 h-6 mr-3 overflow-hidden rounded-full shadow focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>

            <!-- Dropdown Menu -->
            <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full"></div>
            <div x-cloak x-show="dropdownOpen" class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
                <a href="{{ route('setting.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                <a href="{{ route('product.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="w-full text-left">
                        <span class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>
