<div class="w-full sm:w-full md:w-1/3 h-screen bg-gray-50 flex flex-col  h-16 ">
    <x-title-head class="  px-4 pt-4 ">

        <img src="https://randomuser.me/api/portraits/men/1.jpg" width=70 class="rounded-full" alt="">

        <div class="flex-col  pl-4 flex-1 text-sm">
            <p class="text-xl font-bold text-blue-500 ">Okechukwu Favour</p>
            <p class="text-slate-400 text-sm ">Software Developer</p>
        </div>
        <a href={{ route('profile.edit') }}>
            <x-svg.edit-icon class="text-slate-500 hover:bg-blue-100 hover:rounded-full p-3  "  ></x-svg.edit-icon>
        </a>
    </x-title-head>

    <div class="w-full  mt-7 mb-3 px-4 ">

        <x-search-bar class="w-full bg-white border-slate-200  py-3 px-4"></x-search-bar>

    </div>



    <div
        class="w-full   mt-9 overflow-y-scroll h-auto pl-3  scrollbar:!w-1.5 scrollbar:!h-1.5 scrollbar:bg-transparent scrollbar-track:!bg-slate-100 scrollbar-thumb:!rounded scrollbar-thumb:!bg-slate-300 scrollbar-track:!rounded dark:scrollbar-track:!bg-gray-1000/[0.16] dark:scrollbar-thumb:!bg-gray-1000/50 ">

        {{-- <div class="flex-none min-w-full px-4 sm:px-6 md:px-0 overflow-hidden lg:overflow-auto scrollbar:!w-1.5 scrollbar:!h-1.5 scrollbar:bg-transparent scrollbar-track:!bg-slate-100 scrollbar-thumb:!rounded scrollbar-thumb:!bg-slate-300 scrollbar-track:!rounded dark:scrollbar-track:!bg-gray-1000/[0.16] dark:scrollbar-thumb:!bg-gray-1000/50 max-h-96 lg:supports-scrollbars:pr-2">
            <!-- Content here -->hkkk
          </div> --}}

        @php
            $count = 20;
        @endphp
        @for ($i = 0; $i < $count; $i++)
            <x-chat-list-profile class="hover:bg-gray-100 hover:border  hover:rounded-lg px-3 py-2">
            </x-chat-list-profile>
        @endfor
    </div>



</div>
