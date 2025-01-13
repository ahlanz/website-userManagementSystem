<div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
    class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

<div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
    class="fixed inset-y-0  left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-white lg:translate-x-0 lg:static lg:inset-0 shadow-lg">
    <div class="flex items-center justify-center mt-8">
        <div class="flex items-center">

            <img src="{{ asset('assets/image/logo_dash.png') }}" alt="logo dashboard" class="w-10 h-10" />

            <span class="mx-2 text-2xl font-semibold text-black">Dashboard</span>
        </div>
    </div>

    <nav class="mt-10 pl-5">
        <a class="flex items-center px-6 py-2 mt-4 text-gray-100  bg-opacity-25" href="/">
            <svg id='Dashboard_Layout_24' width='24' height='24' viewBox='0 0 24 24'
                xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />

                <g transform="matrix(1 0 0 1 12 12)">
                    <path
                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                        transform=" translate(-12, -12)"
                        d="M 2 2 L 2 3 L 2 13 L 11 13 L 11 2 L 2 2 z M 13 2 L 13 3 L 13 9 L 22 9 L 22 2 L 13 2 z M 4 4 L 9 4 L 9 11 L 4 11 L 4 4 z M 15 4 L 20 4 L 20 7 L 15 7 L 15 4 z M 13 11 L 13 12 L 13 22 L 22 22 L 22 11 L 13 11 z M 15 13 L 20 13 L 20 20 L 15 20 L 15 13 z M 2 15 L 2 16 L 2 22 L 11 22 L 11 15 L 2 15 z M 4 17 L 9 17 L 9 20 L 4 20 L 4 17 z"
                        stroke-linecap="round" />
                </g>
            </svg>


            <span class="mx-3 text-black">Dashboard</span>
        </a>
        <a class="flex items-center px-6 py-2 mt-4 text-gray-100  bg-opacity-25" href="{{ route('product.index') }}">
            <svg id='Product_24' width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'
                xmlns:xlink='http://www.w3.org/1999/xlink'>
                <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />


                <g transform="matrix(0.91 0 0 0.91 12 12)">
                    <path
                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                        transform=" translate(-16, -16)"
                        d="M 8.5 5 L 5 9.65625 L 5 27 L 27 27 L 27 9.65625 L 23.5 5 Z M 9.5 7 L 22.5 7 L 24 9 L 8 9 Z M 7 11 L 25 11 L 25 25 L 7 25 Z M 13 13 C 12.449219 13 12 13.449219 12 14 C 12 14.550781 12.449219 15 13 15 L 19 15 C 19.554688 15 20 14.550781 20 14 C 20 13.449219 19.554688 13 19 13 Z M 19 18 L 18 19 L 18 21 L 20 21 L 20 19 Z M 23 18 L 22 19 L 22 21 L 24 21 L 24 19 Z M 18 22 L 18 24 L 24 24 L 24 22 Z"
                        stroke-linecap="round" />
                </g>
            </svg>


            <span class="mx-3 text-black">Product</span>
        </a>


        <a class="flex items-center px-6 py-2 mt-4 text-black" href="{{ route('users.index') }}">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zM6 20v-1a6 6 0 0112 0v1" />
            </svg>

            <span class="mx-3">User</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 text-black" href="{{ route('users.index') }}">
            <svg id='Settings_24' width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'
                xmlns:xlink='http://www.w3.org/1999/xlink'>
                <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />


                <g transform="matrix(0.5 0 0 0.5 12 12)">
                    <path
                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                        transform=" translate(-24, -24)"
                        d="M 24 4 C 22.423103 4 20.902664 4.1994284 19.451172 4.5371094 C 18.830842029368917 4.681898561537153 18.369594285772642 5.202661963236606 18.300781 5.8359375 L 17.982422 8.7382812 C 17.878304 9.6893592 17.328913 10.530853 16.5 11.009766 C 15.672739 11.487724 14.66862 11.540667 13.792969 11.15625 L 13.791016 11.15625 L 11.125 9.9824219 C 10.542210457018712 9.725955037825631 9.861011246502683 9.865326766087513 9.4257812 10.330078 C 7.3532865 12.539588 5.7626807 15.215064 4.859375 18.201172 C 4.6749739024459345 18.810269582119158 4.894955423040461 19.469431221337043 5.4082031 19.845703 L 7.7734375 21.580078 C 8.5457929 22.147918 9 23.042801 9 24 C 9 24.95771 8.5458041 25.853342 7.7734375 26.419922 L 5.4082031 28.152344 C 4.894955423040461 28.528615778662957 4.6749739024459345 29.18777741788084 4.859375 29.796875 C 5.7625845 32.782665 7.3519262 35.460112 9.4257812 37.669922 C 9.861477634150136 38.133995138795896 10.54261352123931 38.272571006467786 11.125 38.015625 L 13.791016 36.841797 C 14.667094 36.456509 15.672169 36.511947 16.5 36.990234 C 17.328913 37.469147 17.878304 38.310641 17.982422 39.261719 L 18.300781 42.164062 C 18.370110567570745 42.79603416389227 18.830273323843148 43.31567391345083 19.449219 43.460938 C 20.901371 43.799844 22.423103 44 24 44 C 25.576897 44 27.097336 43.800572 28.548828 43.462891 C 29.16915825594199 43.318101726940796 29.630406073583377 42.797337880788184 29.699219 42.164062 L 30.017578 39.261719 C 30.121696 38.310641 30.671087 37.469147 31.5 36.990234 C 32.327261 36.512276 33.33138 36.45738 34.207031 36.841797 L 36.875 38.015625 C 37.45738653294383 38.27257110206223 38.13852253198279 38.13399522792489 38.574219 37.669922 C 40.646713 35.460412 42.237319 32.782983 43.140625 29.796875 C 43.32502611888018 29.187777439213463 43.10504464002503 28.528615804961667 42.591797 28.152344 L 40.226562 26.419922 C 39.454197 25.853342 39 24.95771 39 24 C 39 23.04229 39.454197 22.146658 40.226562 21.580078 L 42.591797 19.847656 C 43.10504464002503 19.471384195038333 43.32502611888018 18.812222560786537 43.140625 18.203125 C 42.237319 15.217017 40.646713 12.539588 38.574219 10.330078 C 38.13852253198279 9.866004772075105 37.45738653294383 9.727428897937772 36.875 9.984375 L 34.207031 11.158203 C 33.33138 11.54262 32.327261 11.487724 31.5 11.009766 C 30.671087 10.530853 30.121696 9.6893592 30.017578 8.7382812 L 29.699219 5.8359375 C 29.62988903412667 5.203965718341405 29.169726359739414 4.684326461937513 28.550781 4.5390625 C 27.098629 4.2001555 25.576897 4 24 4 z M 24 7 C 24.974302 7 25.90992 7.1748796 26.847656 7.3398438 L 27.035156 9.0644531 C 27.243038 10.963375 28.346913 12.652335 30 13.607422 C 31.654169 14.563134 33.668094 14.673009 35.416016 13.904297 L 37.001953 13.207031 C 38.219788 14.669402 39.183985 16.321182 39.857422 18.130859 L 38.451172 19.162109 C 36.911538 20.291529 36 22.08971 36 24 C 36 25.91029 36.911538 27.708471 38.451172 28.837891 L 39.857422 29.869141 C 39.183985 31.678818 38.219788 33.330598 37.001953 34.792969 L 35.416016 34.095703 C 33.668094 33.326991 31.654169 33.436866 30 34.392578 C 28.346913 35.347665 27.243038 37.036625 27.035156 38.935547 L 26.847656 40.660156 C 25.910002 40.82466 24.973817 41 24 41 C 23.025698 41 22.09008 40.82512 21.152344 40.660156 L 20.964844 38.935547 C 20.756962 37.036625 19.653087 35.347665 18 34.392578 C 16.345831 33.436866 14.331906 33.326991 12.583984 34.095703 L 10.998047 34.792969 C 9.7799772 33.330806 8.8159425 31.678964 8.1425781 29.869141 L 9.5488281 28.837891 C 11.088462 27.708471 12 25.91029 12 24 C 12 22.08971 11.087719 20.290363 9.5488281 19.160156 L 8.1425781 18.128906 C 8.8163325 16.318532 9.7814501 14.667839 11 13.205078 L 12.583984 13.902344 C 14.331906 14.671056 16.345831 14.563134 18 13.607422 C 19.653087 12.652335 20.756962 10.963375 20.964844 9.0644531 L 21.152344 7.3398438 C 22.089998 7.1753403 23.026183 7 24 7 z M 24 16 C 19.599487 16 16 19.59949 16 24 C 16 28.40051 19.599487 32 24 32 C 28.400513 32 32 28.40051 32 24 C 32 19.59949 28.400513 16 24 16 z M 24 19 C 26.779194 19 29 21.220808 29 24 C 29 26.779192 26.779194 29 24 29 C 21.220806 29 19 26.779192 19 24 C 19 21.220808 21.220806 19 24 19 z"
                        stroke-linecap="round" />
                </g>
            </svg>

            <span class="mx-3">Setting</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 text-black" href="{{ route('users.index') }}">
            <svg id='Help_24' width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'
                xmlns:xlink='http://www.w3.org/1999/xlink'>
                <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />


                <g transform="matrix(0.43 0 0 0.43 12 12)">
                    <path
                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                        transform=" translate(-25, -25)"
                        d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 25.289062 12.507812 C 21.559062 12.507813 19.085875 14.767938 18.546875 18.210938 C 18.511875 18.426937 18.617984 18.569469 18.833984 18.605469 L 21.09375 19.001953 C 21.30975 19.037953 21.452281 18.929844 21.488281 18.714844 C 21.918281 16.526844 23.208797 15.306641 25.216797 15.306641 C 27.261797 15.306641 28.695312 16.598578 28.695312 18.642578 C 28.695313 19.862578 28.265719 20.687203 27.011719 22.408203 L 24.607422 25.707031 C 23.854422 26.748031 23.533203 27.5015 23.533203 28.9375 L 23.533203 30.40625 C 23.533203 30.62125 23.675625 30.765719 23.890625 30.761719 L 26.257812 30.761719 C 26.472813 30.761719 26.615234 30.619297 26.615234 30.404297 L 26.615234 29.257812 C 26.615234 28.038812 26.831828 27.536359 27.548828 26.568359 L 29.951172 23.267578 C 31.171172 21.581578 31.779297 20.327469 31.779297 18.605469 C 31.779297 15.054469 29.161062 12.507812 25.289062 12.507812 z M 23.712891 33.492188 C 23.496891 33.492187 23.353516 33.636562 23.353516 33.851562 L 23.353516 36.935547 C 23.353516 37.150547 23.495891 37.292969 23.712891 37.292969 L 26.439453 37.292969 C 26.653453 37.292969 26.796875 37.151547 26.796875 36.935547 L 26.796875 33.851562 C 26.796875 33.637563 26.654453 33.492188 26.439453 33.492188 L 23.712891 33.492188 z"
                        stroke-linecap="round" />
                </g>
            </svg>

            <span class="mx-3">Help</span>
        </a>


        <div class="absolute bottom-14 w-full px-6 py-4">
            <a href="#" class="flex items-center text-black-500 ">
                <img src="{{ asset('assets/image/logout.png') }}" alt="logout" class="w-6 h-6" />
                <span class="mx-3">Logout</span>
            </a>
        </div>

    </nav>
</div>
