<div class="flex flex-col  sm:w-full  bg-white h-screen ">
    {{-- user title head --}}
    <x-title-head class="shadow-sm pr-8">
        <div class="flex flex-1 items-center justify-left">
            <img src="https://randomuser.me/api/portraits/men/1.jpg" width=70 class="rounded-full" alt="">
            <p class="text-2xl font-bold pl-4 text-slate-700 ">Okechukwu Favour</p>
            <div class="rounded-full bg-green-400 w-2 h-2 ml-4"></div>
        </div>


        <x-svg.search-img></x-svg.search-img>
        <x-svg.notification-icon class="pl-3"></x-svg.notification-icon>

    </x-title-head>



    {{-- chat content --}}
    <div class=" flex-1  p-5 overscroll-y-scroll ">

        <x-chat.message-head-self>Hello this is a simple message</x-chat.message-head-self>
        <x-chat.message-head-other>Hello world</x-chat.message-head-other>



    </div>

    {{-- chat box --}}
    <div class=" px-7 border-t pt-4 ">
        <div class="flex items-center mb-4 pb-3 py-2 px-3 bg-white rounded -full">
            <form  method="post" class="w-full">
                <input type="text" name=""
                    class="w-full border-0 line-clamp-4 focus:ring-transparent focus:border-0  flex-grow px-2 py-1"
                    placeholder="Type your message here" />
            </form>
            <x-svg.emoji-icon class="mx-4"></x-svg.emoji-icon>
            <x-svg.send-icon class="font-bold">
            </x-svg.send-icon>

        </div>


    </div>
</div>
