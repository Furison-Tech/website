<nav class="glassify-full fixed w-screen top-0 left-0 border-t-0 border-x-0" style="z-index: 9999">
    <div class="container flex flex-wrap items-center justify-between mx-auto px-12 py-4">
        <div class="w-fit md:w-[100px]">
            <a class="flex items-center" href="/">
                <span class="h-8 w-8 inline-block" >
                    @include('_layouts.components.logosvg')
                </span>
                <span class="text-white ml-2 font-black leading-4">Furison<br>Tech</span>
            </a>
        </div>

        <div class="flex md:order-2 relative">
            <a href="/contact" class="code-font rounded-br-2xl rounded-tl-2xl rounded-bl-md rounded-tr-md text-white
                        from-sky-400 via-sky-500 to-blue-600 bg-gradient-to-br border-b-2
                        border-blue-600 focus:border-blue-800 focus:shadow-xl text-sm px-5
                        py-2.5 transition-colors duration-200">
                Contact
            </a>

            <button type="button" onclick="document.getElementById('navbar-dropdown').classList.toggle('hidden')"
                    class="inline-flex items-center p-2 text-sm rounded-lg md:hidden ml-4
                focus:outline-none focus:ring-2 focus:ring-sky-400 text-gray-400">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>

            <div class="hidden md:hidden w-36 absolute bg-0c1929 mt-20 glassify-borders rounded-xl"
                 id="navbar-dropdown">
                <ul class="flex flex-col p-4 md:p-0 font-medium md:flex-row md:space-x-8 md:mt-0">
                    <li><a href="/" class="code-font block py-2 pl-3 pr-4 md:p-0 hover:text-sky-500 text-white">Home</a></li>
                    <li><a href="/about" class="code-font block py-2 pl-3 pr-4 md:p-0 hover:text-sky-500 text-white">About</a></li>
                    <li><a href="/services" class="code-font block py-2 pl-3 pr-4 md:p-0 hover:text-sky-500 text-white">Services</a></li>
                </ul>
            </div>
        </div>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                <li>
                    <a href="/" class="code-font block py-2 pl-3 pr-4 md:p-0 hover:text-sky-500 text-white" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/about" class="code-font block py-2 pl-3 pr-4 md:p-0 hover:text-sky-500 text-white">About</a>
                </li>
                <li>
                    <a href="/services" class="code-font block py-2 pl-3 pr-4 md:p-0 hover:text-sky-500 text-white">Services</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
