<x-dashboard-layout>
    <div class="flex flex-col items-center justify-center" x-data="{ show: false }">
        <p class="md:text-xl my-8 text-center">{{__('dashboard.welcome')}} <span
                class="italic font-bold">{{$user->username}}</span></p>
        <form method="POST" action="{{route('user.update')}}" class="mt-5" enctype="multipart/form-data">
            @csrf
            <div :class="{ 'hidden': show }">
                <x-form.input-file name='thumbnail' thumbnail="{{$user->thumbnail}}" type='file'
                    placeholder="{{__('utils.image')}}" />
            </div>
            <div :class="{ 'hidden': !show }" class="md:w-[500px]">
                <x-form.input name='username' placeholder="{{__('placeholder.emailorusername')}}" />
            </div>
            <x-form.button>{{__('utils.submit')}}</x-form.button>
        </form>
    
        <div  :class="{ 'hidden': show }">
            <p @click="show = !show;" class="text-blue-500 font-bold cursor-pointer hover:text-blue-600 mt-4">{{__('utils.change_username')}}</p>
   
        </div>
    </div>

</x-dashboard-layout>