<header class="bg-white/80 backdrop-blur-sm shadow-sm sticky top-0 z-50" style="background:transparent">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between h-16">
        <div class="flex items-center space-x-2">
            <img src="/placeholder.svg?height=24&width=24" alt="Miss Élégance Logo" class="h-6 w-6" />
            <span class="text-lg font-semibold text-gray-800">Miss Élégance</span>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="{{ route('home') }}"
                class="text-gray-600 hover:text-primary-pink flex items-center space-x-1 transition-colors duration-200">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 10 10" enable-background="new 0 0 32 32"
                    xml:space="preserve" width="25" height="25">
                    <path fill="none" stroke="#000000" stroke-width="0.625" stroke-miterlimit="10"
                        points="3,17 16,4 29,17 " d="M0.938 5.313L5 1.25L9.063 5.313" />
                    <path fill="none" stroke="#000000" stroke-width="0.625" stroke-miterlimit="10"
                        points="6,14 6,27 13,27 13,17 19,17 19,27 26,27
	26,14 "
                        d="M1.875 4.375L1.875 8.438L4.063 8.438L4.063 5.313L5.938 5.313L5.938 8.438L8.125 8.438L8.125 4.375" />
                </svg>
                <span style="border:1em ">Accueil</span>
            </a>
            <a href="{{ route('candidates.index') }}"
                class="text-gray-600 hover:text-primary-pink flex items-center space-x-1 transition-colors duration-200">
                <svg fill="#000000" width="px" height="20px" viewBox="0 0 0.24 0.24" id="user"
                    data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
                    <path id="primary"
                        d="M0.21 0.2a0.02 0.02 0 0 1 -0.02 0.02H0.05a0.02 0.02 0 0 1 -0.02 -0.02 0.06 0.06 0 0 1 0.06 -0.06h0.06a0.06 0.06 0 0 1 0.06 0.06m-0.09 -0.08a0.05 0.05 0 1 0 -0.05 -0.05 0.05 0.05 0 0 0 0.05 0.05"
                        style="fill: rgb(0, 0, 0);" />
                </svg>
                <span>Candidates</span>
            </a>
            <a href="{{ route('candidates.create') }}"
                class="text-gray-600 hover:text-primary-pink flex items-center space-x-1 transition-colors duration-200">
                <svg fill="#000000" width="20px" height="20px" viewBox="0 0 0.6 0.6"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M0.175 0.4h0.25a0.125 0.125 0 0 1 0.125 0.125 0.025 0.025 0 0 1 -0.05 0.003l0 -0.007a0.075 0.075 0 0 0 -0.07 -0.07L0.425 0.45H0.175a0.075 0.075 0 0 0 -0.075 0.075 0.025 0.025 0 0 1 -0.05 0 0.125 0.125 0 0 1 0.12 -0.125zm0.125 -0.35q0.015 0 0.03 0.003a0.025 0.025 0 1 1 -0.01 0.049A0.1 0.1 0 1 0 0.38 0.26a0.025 0.025 0 0 1 0.04 0.03A0.15 0.15 0 1 1 0.3 0.05m0.175 0a0.025 0.025 0 0 1 0.025 0.025v0.025h0.025a0.025 0.025 0 0 1 0 0.05h-0.025v0.025a0.025 0.025 0 0 1 -0.05 0V0.15h-0.025a0.025 0.025 0 0 1 0 -0.05h0.025V0.075a0.025 0.025 0 0 1 0.025 -0.025" />
                </svg>
                <span>S'inscrire</span>
            </a>
            <a href="{{ route('home') }}#vote-section"
                class="text-gray-600 hover:text-primary-pink flex items-center space-x-1 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Voter</span>
            </a>
        </nav>

        <!-- Mobile Hamburger Menu -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-600 hover:text-primary-pink focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Content -->
    <div id="mobile-menu" class="hidden md:hidden bg-white/90 backdrop-blur-sm pb-4">
        <nav class="flex flex-col items-center space-y-3">
            <a href="{{ route('home') }}"
                class="text-gray-700 hover:text-primary-pink py-2 px-4 rounded-lg w-11/12 text-center bg-gray-100 flex items-center justify-center space-x-2 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2 2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span>Accueil</span>
            </a>
            <a href="{{ route('candidates.index') }}"
                class="text-gray-700 hover:text-primary-pink py-2 px-4 rounded-lg w-11/12 text-center bg-gray-100 flex items-center justify-center space-x-2 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17 20h2a2 2 0 002-2V4a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2h2m5-10v4m0 0l-2-2m2 2l2-2m-3 8a2 2 0 01-2-2v-4a2 2 0 012-2h4a2 2 0 012 2v4a2 2 0 01-2 2H9z" />
                </svg>
                <span>Candidates</span>
            </a>
            <a href="{{ route('candidates.create') }}"
                class="text-gray-700 hover:text-primary-pink py-2 px-4 rounded-lg w-11/12 text-center bg-gray-100 flex items-center justify-center space-x-2 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span>S'inscrire</span>
            </a>
            <a href="{{ route('home') }}#vote-section"
                class="text-gray-700 hover:text-primary-pink py-2 px-4 rounded-lg w-11/12 text-center bg-gray-100 flex items-center justify-center space-x-2 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>Voter</span>
            </a>
        </nav>
    </div>
</header>
