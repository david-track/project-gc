<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet">
        <title>Playground</title>
    </head>

    <body>
      <header class="bg-white" x-data="{ isOpen: false }">
        <nav class="container px-8 py-4 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-gray-900 md:text-2xl" href="#">Logo</a>

                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                    <button type="button"
                        class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                        aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <div :class="isOpen ? 'flex' : 'hidden'"
                class="flex-col mt-2 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                <a class="text-gray-800 transform hover:text-yellow-400" href="#">Home</a>
                <a class="text-gray-800 transform hover:text-yellow-400" href="#">About Us</a>
                <a class="text-gray-800 transform hover:text-yellow-400" href="#">Blog</a>
                <a class="text-gray-800 transform hover:text-yellow-400" href="#">Service</a>
                <a class="px-4 py-2 text-center text-white border bg-gradient-to-b from-yellow-300 to-yellow-500 rounded-2xl hover:shadow-xl"
                    href="#">Contact
                    Us</a>
            </div>
        </nav>
    </header>
        
    </body>
</html>
