<nav x-data="{ open: false }" class="flex items-center justify-between flex-wrap bg-sky-600  p-6">
    <a href="/">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
            </svg>

            <span class="font-semibold text-xl tracking-tight">uniwork.de</span>
        </div>
    </a>

    <div class="block lg:hidden">
        <button
            class="flex items-center px-3 py-2 border rounded text-white border-white hover:text-gray-200 hover:border-gray-200">
            <div x-on:click="open = ! open" class="">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </div>
        </button>
    </div>
    <div x-show="open" class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-200 mr-4">
                Profile
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-200 mr-4">
                Applications
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-200">
                Settings
            </a>
        </div>
    </div>

    <div class="hidden w-full flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-200 mr-4">
                Profile
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-200 mr-4">
                Applications
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-gray-200">
                Settings
            </a>
        </div>
    </div>

</nav>
