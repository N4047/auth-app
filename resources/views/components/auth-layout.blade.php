<x-layout>
    <div class="flex flex-col md:flex-row ml-4">
        <div class="flex-1 mx-2 md:mx-28 mt-11 h-[400px]">
            <a href="/" class="italic text-4xl text-[#4899d8] font-bold">{{__('utils.home')}}</a>
            <div class="mt-14 md:min-w-min	">
                {{$slot}}
            </div>
        </div>
        <div class="md:block hidden w-1/2 relative">
            <img class="h-100  ml-auto absolute top-[50%]  -translate-x-[20%] -translate-y-[30%] scale-[.8]"
                src="{{asset('images/auth-back.jpg')}}" />
        </div>
    </div>
</x-layout>