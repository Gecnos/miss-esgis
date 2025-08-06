<header class="bg-white/80 backdrop-blur-sm shadow-sm sticky top-0 z-50" style="background:transparent">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between h-16">
        <div class="flex items-center space-x-2">
            <img src="/placeholder.svg?height=24&width=24" alt="Miss Élégance Logo" class="h-6 w-6" />
            <a href="{{ route('home') }}">
                <span class="text-lg font-semibold text-gray-800">Miss Élégance</span>
            </a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-6">
            {{-- <a href="{{ route('home') }}"
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
            </a> --}}
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
        <nav class="grid grid-cols-2 gap-1" data-selected="true"
            style="transition: none; cursor: move; width: 687px; transform: translate(19px, 0px); height: 94px;">
            <a href="{{ route('home') }}"
                class="text-gray-700 hover:text-primary-pink py-2 px-4 rounded-lg w-11/12 text-center bg-gray-100 flex items-center justify-center space-x-2 transition-colors duration-200">
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
                <span>Accueil</span>
            </a>
            <a href="{{ route('candidates.index') }}"
                class="text-gray-700 hover:text-primary-pink py-2 px-4 rounded-lg w-11/12 text-center bg-gray-100 flex items-center justify-center space-x-2 transition-colors duration-200">
                <svg fill="#000000" width="px" height="20px" viewBox="0 0 0.24 0.24" id="user"
                    data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
                    <path id="primary"
                        d="M0.21 0.2a0.02 0.02 0 0 1 -0.02 0.02H0.05a0.02 0.02 0 0 1 -0.02 -0.02 0.06 0.06 0 0 1 0.06 -0.06h0.06a0.06 0.06 0 0 1 0.06 0.06m-0.09 -0.08a0.05 0.05 0 1 0 -0.05 -0.05 0.05 0.05 0 0 0 0.05 0.05"
                        style="fill: rgb(0, 0, 0);" />
                </svg>
                <span>Candidates</span>
            </a>
            <a href="{{ route('candidates.create') }}"
                class="text-gray-700 hover:text-primary-pink py-2 px-4 rounded-lg w-11/12 text-center bg-gray-100 flex items-center justify-center space-x-2 transition-colors duration-200">
                <svg fill="#000000" width="20px" height="20px" viewBox="0 0 0.6 0.6"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M0.175 0.4h0.25a0.125 0.125 0 0 1 0.125 0.125 0.025 0.025 0 0 1 -0.05 0.003l0 -0.007a0.075 0.075 0 0 0 -0.07 -0.07L0.425 0.45H0.175a0.075 0.075 0 0 0 -0.075 0.075 0.025 0.025 0 0 1 -0.05 0 0.125 0.125 0 0 1 0.12 -0.125zm0.125 -0.35q0.015 0 0.03 0.003a0.025 0.025 0 1 1 -0.01 0.049A0.1 0.1 0 1 0 0.38 0.26a0.025 0.025 0 0 1 0.04 0.03A0.15 0.15 0 1 1 0.3 0.05m0.175 0a0.025 0.025 0 0 1 0.025 0.025v0.025h0.025a0.025 0.025 0 0 1 0 0.05h-0.025v0.025a0.025 0.025 0 0 1 -0.05 0V0.15h-0.025a0.025 0.025 0 0 1 0 -0.05h0.025V0.075a0.025 0.025 0 0 1 0.025 -0.025" />
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
