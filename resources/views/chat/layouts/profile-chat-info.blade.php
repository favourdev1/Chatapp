<div class="flex flex-col sm:w-full md:w-1/3 h-screen bg-gray-50 border-l-2 shadow">
    {{-- <x-title-head>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd"
                d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                clip-rule="evenodd" />
        </svg>

    </x-title-head> --}}

    <div class="flex flex-col items-center justify-items-center mt-8">
        <x-profile-head width="120"></x-profile-head>
        <div class="mt-4">
            <p class="text-2xl">Okechukwu Favour</p>
            <p class="text-center text-gray-400">Software Developer</p>
        </div>

    </div>

    <div class="columns-2 items-center justify-center mt-5">

        <div class=" border-r-2">
            <div class="rounded-full text-blue-500  mx-auto bg-blue-50 p-4  w-fit">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-14 h-14">
                    <path fill-rule="evenodd" d="M5.337 21.718a6.707 6.707 0 01-.533-.074.75.75 0 01-.44-1.223 3.73 3.73 0 00.814-1.686c.023-.115-.022-.317-.254-.543C3.274 16.587 2.25 14.41 2.25 12c0-5.03 4.428-9 9.75-9s9.75 3.97 9.75 9c0 5.03-4.428 9-9.75 9-.833 0-1.643-.097-2.417-.279a6.721 6.721 0 01-4.246.997z" clip-rule="evenodd"/>
                </svg>


            </div>

            <p class="text-center text-gray-400 px-auto">Chat</p>

        </div>


        <div class="">
            <div class="rounded-full text-blue-500  mx-auto bg-blue-50 p-4  w-fit ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-14 h-14">
                    <path d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z"/>
                </svg>

            </div>
            <p class="text-center text-gray-400">Voice Call</p>

        </div>

    </div>

    <!-- options  -->
    <div class="flex-1 columns-1 px-3 mt-9 ">

        <p class="text-2xl px-2 text-slate-800 font-bold">
            Options
        </p>
        <x-profile-options svgImage="   {{__('View Friends')}}">
            <x-svg.person-image></x-svg.person-image>

        </x-profile-options>
        <x-profile-options svgImage=" {{__('Add To Favourite')}}">
            <x-svg.favourite-image></x-svg.favourite-image>

        </x-profile-options>

    </div>


    <!-- delete button  -->

    <div class="bg-gray-50 border-t px-5 py-4 hover:bg-red-50 hover:cursor-pointer ">
        <x-blockuser-button class="text-red-500 font-bold hover:cursor-pointer">{{__('Block User')}}</x-blockuser-button>

    </div>

</div>
