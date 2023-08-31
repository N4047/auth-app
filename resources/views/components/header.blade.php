<nav class="flex justify-between items-center h-20 md:h-90">
    <div class="grid grid-cols-2 items-center flex-grow">
        <div class="flex items-center">
            <a href="{{route('dashboard.index')}}" class="text-xl font-bold">{{__('utils.home')}}</a>
        </div>
        <div class="flex items-center justify-end" x-data="{ show: false }">
            <div class="ml-auto md:block">
                <x-lang-change />
            </div>
            <div class="lg:flex md:flex lg:relative md:relative fixed md:top-0 top-16 md:grid  items-center"
                :class="{ 'hidden': !show }" id="usernameAndLogout">
              
                <div class="grid grid-cols-2 divide-x">
                    <div class="flex items-center justify-center">
                        <h1 class="font-bold text-base mr-2">{{ auth()->user()->username }}</h1>
                        <img src="{{ auth()->user()->thumbnail}}" class="border-[2px] border-gray-400   w-6 h-6 rounded-full  mr-4"/>
                    </div>
                    
                    <div>
                        <a href="
                        {{route('logout')}}
                        " class="ml-4">{{__('dashboard.log_out')}}</a>
                    </div>
                </div>
            </div>
            <div class="ml-auto md:hidden">
                <button class="focus:outline-none" @click="show = !show">
                    <x-assets.toggle-icon />
                </button>
            </div>
        </div>
    </div>
</nav>