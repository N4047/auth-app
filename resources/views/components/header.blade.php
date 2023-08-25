<nav class="flex justify-between items-center h-20 md:h-90">
    <div class="grid grid-cols-2 items-center flex-grow">
        <div class="flex items-center">
            <a href="{{route('dashboard.index')}}">{{__('utils.home')}}</a>
        </div>
        <div class="flex items-center justify-end" x-data="{ show: false }">
            <div class="ml-auto md:block">
                <x-lang-change />
            </div>
            <div class="lg:flex md:flex lg:relative md:relative fixed md:top-0 top-16 md:block"
                :class="{ 'hidden': !show }" id="usernameAndLogout">
                <div class="grid grid-cols-2 divide-x">
                    <div>
                        <h1 class="font-bold text-base mr-4">{{ auth()->user()->username }}</h1>
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